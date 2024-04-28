<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;

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

    #[Depends('testAssertInvalid0')]
    public function testAssertInvalid1(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.1.wasm',
            text: 'unknown global',
            line: 8,
        );
    }

    #[Depends('testAssertInvalid1')]
    public function testAssertInvalid2(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.2.wasm',
            text: 'unknown function',
            line: 12,
        );
    }

    #[Depends('testAssertInvalid2')]
    public function testAssertInvalid3(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.3.wasm',
            text: 'unknown label',
            line: 16,
        );
    }

    #[Depends('testAssertInvalid3')]
    public function testAssertInvalid4(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.4.wasm',
            text: 'type mismatch',
            line: 21,
        );
    }

    #[Depends('testAssertInvalid4')]
    public function testAssertInvalid5(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.5.wasm',
            text: 'type mismatch',
            line: 27,
        );
    }

    #[Depends('testAssertInvalid5')]
    public function testAssertInvalid6(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.6.wasm',
            text: 'type mismatch',
            line: 33,
        );
    }

    #[Depends('testAssertInvalid6')]
    public function testAssertInvalid7(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.7.wasm',
            text: 'type mismatch',
            line: 42,
        );
    }

    #[Depends('testAssertInvalid7')]
    public function testAssertInvalid8(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.8.wasm',
            text: 'type mismatch',
            line: 46,
        );
    }

    #[Depends('testAssertInvalid8')]
    public function testAssertInvalid9(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.9.wasm',
            text: 'type mismatch',
            line: 50,
        );
    }

    #[Depends('testAssertInvalid9')]
    public function testAssertInvalid10(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.10.wasm',
            text: 'type mismatch',
            line: 56,
        );
    }

    #[Depends('testAssertInvalid10')]
    public function testAssertInvalid11(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.11.wasm',
            text: 'type mismatch',
            line: 60,
        );
    }

    #[Depends('testAssertInvalid11')]
    public function testAssertInvalid12(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.12.wasm',
            text: 'type mismatch',
            line: 64,
        );
    }

    #[Depends('testAssertInvalid12')]
    public function testAssertInvalid13(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.13.wasm',
            text: 'type mismatch',
            line: 71,
        );
    }

    #[Depends('testAssertInvalid13')]
    public function testAssertInvalid14(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.14.wasm',
            text: 'type mismatch',
            line: 77,
        );
    }

    #[Depends('testAssertInvalid14')]
    public function testAssertInvalid15(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.15.wasm',
            text: 'type mismatch',
            line: 83,
        );
    }

    #[Depends('testAssertInvalid15')]
    public function testAssertInvalid16(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.16.wasm',
            text: 'type mismatch',
            line: 89,
        );
    }

    #[Depends('testAssertInvalid16')]
    public function testAssertInvalid17(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.17.wasm',
            text: 'type mismatch',
            line: 95,
        );
    }

    #[Depends('testAssertInvalid17')]
    public function testAssertInvalid18(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.18.wasm',
            text: 'type mismatch',
            line: 101,
        );
    }

    #[Depends('testAssertInvalid18')]
    public function testAssertInvalid19(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.19.wasm',
            text: 'type mismatch',
            line: 107,
        );
    }

    #[Depends('testAssertInvalid19')]
    public function testAssertInvalid20(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.20.wasm',
            text: 'type mismatch',
            line: 113,
        );
    }

    #[Depends('testAssertInvalid20')]
    public function testAssertInvalid21(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.21.wasm',
            text: 'type mismatch',
            line: 119,
        );
    }

    #[Depends('testAssertInvalid21')]
    public function testAssertInvalid22(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.22.wasm',
            text: 'type mismatch',
            line: 125,
        );
    }

    #[Depends('testAssertInvalid22')]
    public function testAssertInvalid23(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.23.wasm',
            text: 'type mismatch',
            line: 132,
        );
    }

    #[Depends('testAssertInvalid23')]
    public function testAssertInvalid24(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.24.wasm',
            text: 'type mismatch',
            line: 138,
        );
    }

    #[Depends('testAssertInvalid24')]
    public function testAssertInvalid25(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.25.wasm',
            text: 'type mismatch',
            line: 144,
        );
    }

    #[Depends('testAssertInvalid25')]
    public function testAssertInvalid26(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.26.wasm',
            text: 'type mismatch',
            line: 150,
        );
    }

    #[Depends('testAssertInvalid26')]
    public function testAssertInvalid27(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.27.wasm',
            text: 'type mismatch',
            line: 156,
        );
    }

    #[Depends('testAssertInvalid27')]
    public function testAssertInvalid28(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.28.wasm',
            text: 'type mismatch',
            line: 162,
        );
    }

    #[Depends('testAssertInvalid28')]
    public function testAssertInvalid29(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.29.wasm',
            text: 'type mismatch',
            line: 168,
        );
    }

    #[Depends('testAssertInvalid29')]
    public function testAssertInvalid30(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.30.wasm',
            text: 'type mismatch',
            line: 174,
        );
    }

    #[Depends('testAssertInvalid30')]
    public function testAssertInvalid31(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.31.wasm',
            text: 'type mismatch',
            line: 180,
        );
    }

    #[Depends('testAssertInvalid31')]
    public function testAssertInvalid32(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.32.wasm',
            text: 'type mismatch',
            line: 186,
        );
    }

    #[Depends('testAssertInvalid32')]
    public function testAssertInvalid33(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.33.wasm',
            text: 'type mismatch',
            line: 193,
        );
    }

    #[Depends('testAssertInvalid33')]
    public function testAssertInvalid34(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.34.wasm',
            text: 'type mismatch',
            line: 199,
        );
    }

    #[Depends('testAssertInvalid34')]
    public function testAssertInvalid35(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.35.wasm',
            text: 'type mismatch',
            line: 205,
        );
    }

    #[Depends('testAssertInvalid35')]
    public function testAssertInvalid36(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.36.wasm',
            text: 'type mismatch',
            line: 211,
        );
    }

    #[Depends('testAssertInvalid36')]
    public function testAssertInvalid37(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.37.wasm',
            text: 'type mismatch',
            line: 217,
        );
    }

    #[Depends('testAssertInvalid37')]
    public function testAssertInvalid38(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.38.wasm',
            text: 'type mismatch',
            line: 223,
        );
    }

    #[Depends('testAssertInvalid38')]
    public function testAssertInvalid39(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.39.wasm',
            text: 'type mismatch',
            line: 229,
        );
    }

    #[Depends('testAssertInvalid39')]
    public function testAssertInvalid40(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.40.wasm',
            text: 'type mismatch',
            line: 235,
        );
    }

    #[Depends('testAssertInvalid40')]
    public function testAssertInvalid41(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.41.wasm',
            text: 'type mismatch',
            line: 241,
        );
    }

    #[Depends('testAssertInvalid41')]
    public function testAssertInvalid42(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.42.wasm',
            text: 'type mismatch',
            line: 247,
        );
    }

    #[Depends('testAssertInvalid42')]
    public function testAssertInvalid43(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.43.wasm',
            text: 'type mismatch',
            line: 253,
        );
    }

    #[Depends('testAssertInvalid43')]
    public function testAssertInvalid44(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.44.wasm',
            text: 'type mismatch',
            line: 259,
        );
    }

    #[Depends('testAssertInvalid44')]
    public function testAssertInvalid45(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.45.wasm',
            text: 'type mismatch',
            line: 265,
        );
    }

    #[Depends('testAssertInvalid45')]
    public function testAssertInvalid46(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.46.wasm',
            text: 'type mismatch',
            line: 271,
        );
    }

    #[Depends('testAssertInvalid46')]
    public function testAssertInvalid47(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.47.wasm',
            text: 'type mismatch',
            line: 277,
        );
    }

    #[Depends('testAssertInvalid47')]
    public function testAssertInvalid48(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.48.wasm',
            text: 'type mismatch',
            line: 284,
        );
    }

    #[Depends('testAssertInvalid48')]
    public function testAssertInvalid49(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.49.wasm',
            text: 'type mismatch',
            line: 290,
        );
    }

    #[Depends('testAssertInvalid49')]
    public function testAssertInvalid50(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.50.wasm',
            text: 'type mismatch',
            line: 296,
        );
    }

    #[Depends('testAssertInvalid50')]
    public function testAssertInvalid51(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.51.wasm',
            text: 'type mismatch',
            line: 302,
        );
    }

    #[Depends('testAssertInvalid51')]
    public function testAssertInvalid52(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.52.wasm',
            text: 'type mismatch',
            line: 308,
        );
    }

    #[Depends('testAssertInvalid52')]
    public function testAssertInvalid53(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.53.wasm',
            text: 'type mismatch',
            line: 314,
        );
    }

    #[Depends('testAssertInvalid53')]
    public function testAssertInvalid54(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.54.wasm',
            text: 'type mismatch',
            line: 321,
        );
    }

    #[Depends('testAssertInvalid54')]
    public function testAssertInvalid55(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.55.wasm',
            text: 'type mismatch',
            line: 327,
        );
    }

    #[Depends('testAssertInvalid55')]
    public function testAssertInvalid56(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.56.wasm',
            text: 'type mismatch',
            line: 334,
        );
    }

    #[Depends('testAssertInvalid56')]
    public function testAssertInvalid57(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.57.wasm',
            text: 'type mismatch',
            line: 340,
        );
    }

    #[Depends('testAssertInvalid57')]
    public function testAssertInvalid58(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.58.wasm',
            text: 'type mismatch',
            line: 348,
        );
    }

    #[Depends('testAssertInvalid58')]
    public function testAssertInvalid59(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.59.wasm',
            text: 'type mismatch',
            line: 354,
        );
    }

    #[Depends('testAssertInvalid59')]
    public function testAssertInvalid60(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.60.wasm',
            text: 'type mismatch',
            line: 360,
        );
    }

    #[Depends('testAssertInvalid60')]
    public function testAssertInvalid61(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.61.wasm',
            text: 'type mismatch',
            line: 366,
        );
    }

    #[Depends('testAssertInvalid61')]
    public function testAssertInvalid62(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.62.wasm',
            text: 'type mismatch',
            line: 372,
        );
    }

    #[Depends('testAssertInvalid62')]
    public function testAssertInvalid63(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.63.wasm',
            text: 'type mismatch',
            line: 378,
        );
    }

    #[Depends('testAssertInvalid63')]
    public function testAssertInvalid64(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.64.wasm',
            text: 'type mismatch',
            line: 384,
        );
    }

    #[Depends('testAssertInvalid64')]
    public function testAssertInvalid65(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.65.wasm',
            text: 'type mismatch',
            line: 390,
        );
    }

    #[Depends('testAssertInvalid65')]
    public function testAssertInvalid66(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.66.wasm',
            text: 'type mismatch',
            line: 396,
        );
    }

    #[Depends('testAssertInvalid66')]
    public function testAssertInvalid67(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.67.wasm',
            text: 'type mismatch',
            line: 402,
        );
    }

    #[Depends('testAssertInvalid67')]
    public function testAssertInvalid68(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.68.wasm',
            text: 'type mismatch',
            line: 409,
        );
    }

    #[Depends('testAssertInvalid68')]
    public function testAssertInvalid69(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.69.wasm',
            text: 'type mismatch',
            line: 415,
        );
    }

    #[Depends('testAssertInvalid69')]
    public function testAssertInvalid70(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.70.wasm',
            text: 'type mismatch',
            line: 421,
        );
    }

    #[Depends('testAssertInvalid70')]
    public function testAssertInvalid71(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.71.wasm',
            text: 'type mismatch',
            line: 427,
        );
    }

    #[Depends('testAssertInvalid71')]
    public function testAssertInvalid72(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.72.wasm',
            text: 'type mismatch',
            line: 433,
        );
    }

    #[Depends('testAssertInvalid72')]
    public function testAssertInvalid73(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.73.wasm',
            text: 'type mismatch',
            line: 439,
        );
    }

    #[Depends('testAssertInvalid73')]
    public function testAssertInvalid74(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.74.wasm',
            text: 'type mismatch',
            line: 445,
        );
    }

    #[Depends('testAssertInvalid74')]
    public function testAssertInvalid75(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.75.wasm',
            text: 'type mismatch',
            line: 451,
        );
    }

    #[Depends('testAssertInvalid75')]
    public function testAssertInvalid76(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.76.wasm',
            text: 'type mismatch',
            line: 457,
        );
    }

    #[Depends('testAssertInvalid76')]
    public function testAssertInvalid77(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.77.wasm',
            text: 'type mismatch',
            line: 463,
        );
    }

    #[Depends('testAssertInvalid77')]
    public function testAssertInvalid78(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.78.wasm',
            text: 'type mismatch',
            line: 470,
        );
    }

    #[Depends('testAssertInvalid78')]
    public function testAssertInvalid79(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.79.wasm',
            text: 'type mismatch',
            line: 477,
        );
    }

    #[Depends('testAssertInvalid79')]
    public function testAssertInvalid80(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.80.wasm',
            text: 'type mismatch',
            line: 484,
        );
    }

    #[Depends('testAssertInvalid80')]
    public function testAssertInvalid81(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.81.wasm',
            text: 'type mismatch',
            line: 490,
        );
    }

    #[Depends('testAssertInvalid81')]
    public function testAssertInvalid82(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.82.wasm',
            text: 'type mismatch',
            line: 498,
        );
    }

    #[Depends('testAssertInvalid82')]
    public function testAssertInvalid83(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.83.wasm',
            text: 'type mismatch',
            line: 507,
        );
    }

    #[Depends('testAssertInvalid83')]
    public function testAssertInvalid84(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.84.wasm',
            text: 'type mismatch',
            line: 515,
        );
    }

    #[Depends('testAssertInvalid84')]
    public function testAssertInvalid85(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.85.wasm',
            text: 'type mismatch',
            line: 521,
        );
    }

    #[Depends('testAssertInvalid85')]
    public function testAssertInvalid86(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.86.wasm',
            text: 'type mismatch',
            line: 527,
        );
    }

    #[Depends('testAssertInvalid86')]
    public function testAssertInvalid87(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.87.wasm',
            text: 'type mismatch',
            line: 540,
        );
    }

    #[Depends('testAssertInvalid87')]
    public function testAssertInvalid88(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.88.wasm',
            text: 'type mismatch',
            line: 546,
        );
    }

    #[Depends('testAssertInvalid88')]
    public function testAssertInvalid89(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.89.wasm',
            text: 'type mismatch',
            line: 552,
        );
    }

    #[Depends('testAssertInvalid89')]
    public function testAssertInvalid90(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.90.wasm',
            text: 'type mismatch',
            line: 558,
        );
    }

    #[Depends('testAssertInvalid90')]
    public function testAssertInvalid91(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.91.wasm',
            text: 'type mismatch',
            line: 565,
        );
    }

    #[Depends('testAssertInvalid91')]
    public function testAssertInvalid92(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.92.wasm',
            text: 'type mismatch',
            line: 571,
        );
    }

    #[Depends('testAssertInvalid92')]
    public function testAssertInvalid93(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.93.wasm',
            text: 'type mismatch',
            line: 577,
        );
    }

    #[Depends('testAssertInvalid93')]
    public function testAssertInvalid94(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.94.wasm',
            text: 'type mismatch',
            line: 584,
        );
    }

    #[Depends('testAssertInvalid94')]
    public function testAssertInvalid95(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.95.wasm',
            text: 'type mismatch',
            line: 590,
        );
    }

    #[Depends('testAssertInvalid95')]
    public function testAssertInvalid96(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.96.wasm',
            text: 'type mismatch',
            line: 596,
        );
    }

    #[Depends('testAssertInvalid96')]
    public function testAssertInvalid97(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.97.wasm',
            text: 'type mismatch',
            line: 604,
        );
    }

    #[Depends('testAssertInvalid97')]
    public function testAssertInvalid98(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.98.wasm',
            text: 'type mismatch',
            line: 611,
        );
    }

    #[Depends('testAssertInvalid98')]
    public function testAssertInvalid99(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.99.wasm',
            text: 'type mismatch',
            line: 617,
        );
    }

    #[Depends('testAssertInvalid99')]
    public function testAssertInvalid100(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.100.wasm',
            text: 'type mismatch',
            line: 623,
        );
    }

    #[Depends('testAssertInvalid100')]
    public function testAssertInvalid101(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.101.wasm',
            text: 'type mismatch',
            line: 629,
        );
    }

    #[Depends('testAssertInvalid101')]
    public function testAssertInvalid102(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.102.wasm',
            text: 'type mismatch',
            line: 637,
        );
    }

    #[Depends('testAssertInvalid102')]
    public function testAssertInvalid103(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.103.wasm',
            text: 'type mismatch',
            line: 643,
        );
    }

    #[Depends('testAssertInvalid103')]
    public function testAssertInvalid104(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.104.wasm',
            text: 'type mismatch',
            line: 649,
        );
    }

    #[Depends('testAssertInvalid104')]
    public function testAssertInvalid105(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.105.wasm',
            text: 'type mismatch',
            line: 656,
        );
    }

    #[Depends('testAssertInvalid105')]
    public function testAssertInvalid106(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.106.wasm',
            text: 'type mismatch',
            line: 662,
        );
    }

    #[Depends('testAssertInvalid106')]
    public function testAssertInvalid107(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.107.wasm',
            text: 'type mismatch',
            line: 669,
        );
    }

    #[Depends('testAssertInvalid107')]
    public function testAssertInvalid108(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.108.wasm',
            text: 'type mismatch',
            line: 676,
        );
    }

    #[Depends('testAssertInvalid108')]
    public function testAssertInvalid109(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.109.wasm',
            text: 'type mismatch',
            line: 687,
        );
    }

    #[Depends('testAssertInvalid109')]
    public function testAssertInvalid110(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.110.wasm',
            text: 'type mismatch',
            line: 699,
        );
    }

    #[Depends('testAssertInvalid110')]
    public function testAssertInvalid111(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.111.wasm',
            text: 'type mismatch',
            line: 704,
        );
    }

    #[Depends('testAssertInvalid111')]
    public function testAssertInvalid112(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.112.wasm',
            text: 'type mismatch',
            line: 710,
        );
    }

    #[Depends('testAssertInvalid112')]
    public function testAssertInvalid113(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.113.wasm',
            text: 'type mismatch',
            line: 715,
        );
    }

    #[Depends('testAssertInvalid113')]
    public function testAssertInvalid114(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.114.wasm',
            text: 'type mismatch',
            line: 720,
        );
    }

    #[Depends('testAssertInvalid114')]
    public function testAssertInvalid115(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.115.wasm',
            text: 'type mismatch',
            line: 726,
        );
    }

    #[Depends('testAssertInvalid115')]
    public function testAssertInvalid116(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.116.wasm',
            text: 'type mismatch',
            line: 733,
        );
    }

    #[Depends('testAssertInvalid116')]
    public function testAssertInvalid117(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'unreached-invalid.117.wasm',
            text: 'type mismatch',
            line: 738,
        );
    }
}
