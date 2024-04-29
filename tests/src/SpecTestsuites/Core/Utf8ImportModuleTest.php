<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class Utf8ImportModuleTest extends SpecTestsuiteBase
{
    public function testAssertMalformed0(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.0.wasm',
            text: 'malformed UTF-8 encoding',
            line: 7,
        );
    }

    #[Depends('testAssertMalformed0')]
    public function testAssertMalformed1(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.1.wasm',
            text: 'malformed UTF-8 encoding',
            line: 22,
        );
    }

    #[Depends('testAssertMalformed1')]
    public function testAssertMalformed2(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.2.wasm',
            text: 'malformed UTF-8 encoding',
            line: 37,
        );
    }

    #[Depends('testAssertMalformed2')]
    public function testAssertMalformed3(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.3.wasm',
            text: 'malformed UTF-8 encoding',
            line: 52,
        );
    }

    #[Depends('testAssertMalformed3')]
    public function testAssertMalformed4(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.4.wasm',
            text: 'malformed UTF-8 encoding',
            line: 67,
        );
    }

    #[Depends('testAssertMalformed4')]
    public function testAssertMalformed5(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.5.wasm',
            text: 'malformed UTF-8 encoding',
            line: 82,
        );
    }

    #[Depends('testAssertMalformed5')]
    public function testAssertMalformed6(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.6.wasm',
            text: 'malformed UTF-8 encoding',
            line: 99,
        );
    }

    #[Depends('testAssertMalformed6')]
    public function testAssertMalformed7(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.7.wasm',
            text: 'malformed UTF-8 encoding',
            line: 114,
        );
    }

    #[Depends('testAssertMalformed7')]
    public function testAssertMalformed8(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.8.wasm',
            text: 'malformed UTF-8 encoding',
            line: 129,
        );
    }

    #[Depends('testAssertMalformed8')]
    public function testAssertMalformed9(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.9.wasm',
            text: 'malformed UTF-8 encoding',
            line: 146,
        );
    }

    #[Depends('testAssertMalformed9')]
    public function testAssertMalformed10(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.10.wasm',
            text: 'malformed UTF-8 encoding',
            line: 161,
        );
    }

    #[Depends('testAssertMalformed10')]
    public function testAssertMalformed11(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.11.wasm',
            text: 'malformed UTF-8 encoding',
            line: 176,
        );
    }

    #[Depends('testAssertMalformed11')]
    public function testAssertMalformed12(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.12.wasm',
            text: 'malformed UTF-8 encoding',
            line: 191,
        );
    }

    #[Depends('testAssertMalformed12')]
    public function testAssertMalformed13(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.13.wasm',
            text: 'malformed UTF-8 encoding',
            line: 206,
        );
    }

    #[Depends('testAssertMalformed13')]
    public function testAssertMalformed14(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.14.wasm',
            text: 'malformed UTF-8 encoding',
            line: 221,
        );
    }

    #[Depends('testAssertMalformed14')]
    public function testAssertMalformed15(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.15.wasm',
            text: 'malformed UTF-8 encoding',
            line: 236,
        );
    }

    #[Depends('testAssertMalformed15')]
    public function testAssertMalformed16(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.16.wasm',
            text: 'malformed UTF-8 encoding',
            line: 251,
        );
    }

    #[Depends('testAssertMalformed16')]
    public function testAssertMalformed17(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.17.wasm',
            text: 'malformed UTF-8 encoding',
            line: 266,
        );
    }

    #[Depends('testAssertMalformed17')]
    public function testAssertMalformed18(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.18.wasm',
            text: 'malformed UTF-8 encoding',
            line: 281,
        );
    }

    #[Depends('testAssertMalformed18')]
    public function testAssertMalformed19(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.19.wasm',
            text: 'malformed UTF-8 encoding',
            line: 296,
        );
    }

    #[Depends('testAssertMalformed19')]
    public function testAssertMalformed20(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.20.wasm',
            text: 'malformed UTF-8 encoding',
            line: 311,
        );
    }

    #[Depends('testAssertMalformed20')]
    public function testAssertMalformed21(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.21.wasm',
            text: 'malformed UTF-8 encoding',
            line: 328,
        );
    }

    #[Depends('testAssertMalformed21')]
    public function testAssertMalformed22(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.22.wasm',
            text: 'malformed UTF-8 encoding',
            line: 343,
        );
    }

    #[Depends('testAssertMalformed22')]
    public function testAssertMalformed23(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.23.wasm',
            text: 'malformed UTF-8 encoding',
            line: 358,
        );
    }

    #[Depends('testAssertMalformed23')]
    public function testAssertMalformed24(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.24.wasm',
            text: 'malformed UTF-8 encoding',
            line: 373,
        );
    }

    #[Depends('testAssertMalformed24')]
    public function testAssertMalformed25(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.25.wasm',
            text: 'malformed UTF-8 encoding',
            line: 388,
        );
    }

    #[Depends('testAssertMalformed25')]
    public function testAssertMalformed26(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.26.wasm',
            text: 'malformed UTF-8 encoding',
            line: 405,
        );
    }

    #[Depends('testAssertMalformed26')]
    public function testAssertMalformed27(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.27.wasm',
            text: 'malformed UTF-8 encoding',
            line: 420,
        );
    }

    #[Depends('testAssertMalformed27')]
    public function testAssertMalformed28(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.28.wasm',
            text: 'malformed UTF-8 encoding',
            line: 435,
        );
    }

    #[Depends('testAssertMalformed28')]
    public function testAssertMalformed29(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.29.wasm',
            text: 'malformed UTF-8 encoding',
            line: 450,
        );
    }

    #[Depends('testAssertMalformed29')]
    public function testAssertMalformed30(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.30.wasm',
            text: 'malformed UTF-8 encoding',
            line: 465,
        );
    }

    #[Depends('testAssertMalformed30')]
    public function testAssertMalformed31(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.31.wasm',
            text: 'malformed UTF-8 encoding',
            line: 480,
        );
    }

    #[Depends('testAssertMalformed31')]
    public function testAssertMalformed32(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.32.wasm',
            text: 'malformed UTF-8 encoding',
            line: 495,
        );
    }

    #[Depends('testAssertMalformed32')]
    public function testAssertMalformed33(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.33.wasm',
            text: 'malformed UTF-8 encoding',
            line: 510,
        );
    }

    #[Depends('testAssertMalformed33')]
    public function testAssertMalformed34(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.34.wasm',
            text: 'malformed UTF-8 encoding',
            line: 525,
        );
    }

    #[Depends('testAssertMalformed34')]
    public function testAssertMalformed35(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.35.wasm',
            text: 'malformed UTF-8 encoding',
            line: 540,
        );
    }

    #[Depends('testAssertMalformed35')]
    public function testAssertMalformed36(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.36.wasm',
            text: 'malformed UTF-8 encoding',
            line: 555,
        );
    }

    #[Depends('testAssertMalformed36')]
    public function testAssertMalformed37(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.37.wasm',
            text: 'malformed UTF-8 encoding',
            line: 570,
        );
    }

    #[Depends('testAssertMalformed37')]
    public function testAssertMalformed38(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.38.wasm',
            text: 'malformed UTF-8 encoding',
            line: 585,
        );
    }

    #[Depends('testAssertMalformed38')]
    public function testAssertMalformed39(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.39.wasm',
            text: 'malformed UTF-8 encoding',
            line: 600,
        );
    }

    #[Depends('testAssertMalformed39')]
    public function testAssertMalformed40(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.40.wasm',
            text: 'malformed UTF-8 encoding',
            line: 615,
        );
    }

    #[Depends('testAssertMalformed40')]
    public function testAssertMalformed41(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.41.wasm',
            text: 'malformed UTF-8 encoding',
            line: 630,
        );
    }

    #[Depends('testAssertMalformed41')]
    public function testAssertMalformed42(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.42.wasm',
            text: 'malformed UTF-8 encoding',
            line: 645,
        );
    }

    #[Depends('testAssertMalformed42')]
    public function testAssertMalformed43(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.43.wasm',
            text: 'malformed UTF-8 encoding',
            line: 660,
        );
    }

    #[Depends('testAssertMalformed43')]
    public function testAssertMalformed44(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.44.wasm',
            text: 'malformed UTF-8 encoding',
            line: 675,
        );
    }

    #[Depends('testAssertMalformed44')]
    public function testAssertMalformed45(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.45.wasm',
            text: 'malformed UTF-8 encoding',
            line: 690,
        );
    }

    #[Depends('testAssertMalformed45')]
    public function testAssertMalformed46(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.46.wasm',
            text: 'malformed UTF-8 encoding',
            line: 705,
        );
    }

    #[Depends('testAssertMalformed46')]
    public function testAssertMalformed47(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.47.wasm',
            text: 'malformed UTF-8 encoding',
            line: 720,
        );
    }

    #[Depends('testAssertMalformed47')]
    public function testAssertMalformed48(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.48.wasm',
            text: 'malformed UTF-8 encoding',
            line: 735,
        );
    }

    #[Depends('testAssertMalformed48')]
    public function testAssertMalformed49(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.49.wasm',
            text: 'malformed UTF-8 encoding',
            line: 750,
        );
    }

    #[Depends('testAssertMalformed49')]
    public function testAssertMalformed50(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.50.wasm',
            text: 'malformed UTF-8 encoding',
            line: 765,
        );
    }

    #[Depends('testAssertMalformed50')]
    public function testAssertMalformed51(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.51.wasm',
            text: 'malformed UTF-8 encoding',
            line: 780,
        );
    }

    #[Depends('testAssertMalformed51')]
    public function testAssertMalformed52(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.52.wasm',
            text: 'malformed UTF-8 encoding',
            line: 795,
        );
    }

    #[Depends('testAssertMalformed52')]
    public function testAssertMalformed53(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.53.wasm',
            text: 'malformed UTF-8 encoding',
            line: 810,
        );
    }

    #[Depends('testAssertMalformed53')]
    public function testAssertMalformed54(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.54.wasm',
            text: 'malformed UTF-8 encoding',
            line: 825,
        );
    }

    #[Depends('testAssertMalformed54')]
    public function testAssertMalformed55(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.55.wasm',
            text: 'malformed UTF-8 encoding',
            line: 840,
        );
    }

    #[Depends('testAssertMalformed55')]
    public function testAssertMalformed56(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.56.wasm',
            text: 'malformed UTF-8 encoding',
            line: 855,
        );
    }

    #[Depends('testAssertMalformed56')]
    public function testAssertMalformed57(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.57.wasm',
            text: 'malformed UTF-8 encoding',
            line: 870,
        );
    }

    #[Depends('testAssertMalformed57')]
    public function testAssertMalformed58(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.58.wasm',
            text: 'malformed UTF-8 encoding',
            line: 887,
        );
    }

    #[Depends('testAssertMalformed58')]
    public function testAssertMalformed59(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.59.wasm',
            text: 'malformed UTF-8 encoding',
            line: 902,
        );
    }

    #[Depends('testAssertMalformed59')]
    public function testAssertMalformed60(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.60.wasm',
            text: 'malformed UTF-8 encoding',
            line: 917,
        );
    }

    #[Depends('testAssertMalformed60')]
    public function testAssertMalformed61(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.61.wasm',
            text: 'malformed UTF-8 encoding',
            line: 932,
        );
    }

    #[Depends('testAssertMalformed61')]
    public function testAssertMalformed62(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.62.wasm',
            text: 'malformed UTF-8 encoding',
            line: 947,
        );
    }

    #[Depends('testAssertMalformed62')]
    public function testAssertMalformed63(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.63.wasm',
            text: 'malformed UTF-8 encoding',
            line: 962,
        );
    }

    #[Depends('testAssertMalformed63')]
    public function testAssertMalformed64(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.64.wasm',
            text: 'malformed UTF-8 encoding',
            line: 977,
        );
    }

    #[Depends('testAssertMalformed64')]
    public function testAssertMalformed65(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.65.wasm',
            text: 'malformed UTF-8 encoding',
            line: 992,
        );
    }

    #[Depends('testAssertMalformed65')]
    public function testAssertMalformed66(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.66.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1007,
        );
    }

    #[Depends('testAssertMalformed66')]
    public function testAssertMalformed67(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.67.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1022,
        );
    }

    #[Depends('testAssertMalformed67')]
    public function testAssertMalformed68(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.68.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1037,
        );
    }

    #[Depends('testAssertMalformed68')]
    public function testAssertMalformed69(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.69.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1052,
        );
    }

    #[Depends('testAssertMalformed69')]
    public function testAssertMalformed70(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.70.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1067,
        );
    }

    #[Depends('testAssertMalformed70')]
    public function testAssertMalformed71(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.71.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1082,
        );
    }

    #[Depends('testAssertMalformed71')]
    public function testAssertMalformed72(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.72.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1097,
        );
    }

    #[Depends('testAssertMalformed72')]
    public function testAssertMalformed73(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.73.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1112,
        );
    }

    #[Depends('testAssertMalformed73')]
    public function testAssertMalformed74(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.74.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1127,
        );
    }

    #[Depends('testAssertMalformed74')]
    public function testAssertMalformed75(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.75.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1142,
        );
    }

    #[Depends('testAssertMalformed75')]
    public function testAssertMalformed76(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.76.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1157,
        );
    }

    #[Depends('testAssertMalformed76')]
    public function testAssertMalformed77(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.77.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1172,
        );
    }

    #[Depends('testAssertMalformed77')]
    public function testAssertMalformed78(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.78.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1187,
        );
    }

    #[Depends('testAssertMalformed78')]
    public function testAssertMalformed79(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.79.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1202,
        );
    }

    #[Depends('testAssertMalformed79')]
    public function testAssertMalformed80(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.80.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1217,
        );
    }

    #[Depends('testAssertMalformed80')]
    public function testAssertMalformed81(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.81.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1232,
        );
    }

    #[Depends('testAssertMalformed81')]
    public function testAssertMalformed82(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.82.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1249,
        );
    }

    #[Depends('testAssertMalformed82')]
    public function testAssertMalformed83(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.83.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1264,
        );
    }

    #[Depends('testAssertMalformed83')]
    public function testAssertMalformed84(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.84.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1279,
        );
    }

    #[Depends('testAssertMalformed84')]
    public function testAssertMalformed85(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.85.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1294,
        );
    }

    #[Depends('testAssertMalformed85')]
    public function testAssertMalformed86(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.86.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1309,
        );
    }

    #[Depends('testAssertMalformed86')]
    public function testAssertMalformed87(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.87.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1324,
        );
    }

    #[Depends('testAssertMalformed87')]
    public function testAssertMalformed88(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.88.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1339,
        );
    }

    #[Depends('testAssertMalformed88')]
    public function testAssertMalformed89(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.89.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1356,
        );
    }

    #[Depends('testAssertMalformed89')]
    public function testAssertMalformed90(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.90.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1371,
        );
    }

    #[Depends('testAssertMalformed90')]
    public function testAssertMalformed91(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.91.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1386,
        );
    }

    #[Depends('testAssertMalformed91')]
    public function testAssertMalformed92(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.92.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1401,
        );
    }

    #[Depends('testAssertMalformed92')]
    public function testAssertMalformed93(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.93.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1416,
        );
    }

    #[Depends('testAssertMalformed93')]
    public function testAssertMalformed94(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.94.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1431,
        );
    }

    #[Depends('testAssertMalformed94')]
    public function testAssertMalformed95(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.95.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1446,
        );
    }

    #[Depends('testAssertMalformed95')]
    public function testAssertMalformed96(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.96.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1461,
        );
    }

    #[Depends('testAssertMalformed96')]
    public function testAssertMalformed97(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.97.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1476,
        );
    }

    #[Depends('testAssertMalformed97')]
    public function testAssertMalformed98(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.98.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1491,
        );
    }

    #[Depends('testAssertMalformed98')]
    public function testAssertMalformed99(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.99.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1506,
        );
    }

    #[Depends('testAssertMalformed99')]
    public function testAssertMalformed100(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.100.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1521,
        );
    }

    #[Depends('testAssertMalformed100')]
    public function testAssertMalformed101(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.101.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1536,
        );
    }

    #[Depends('testAssertMalformed101')]
    public function testAssertMalformed102(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.102.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1551,
        );
    }

    #[Depends('testAssertMalformed102')]
    public function testAssertMalformed103(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.103.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1566,
        );
    }

    #[Depends('testAssertMalformed103')]
    public function testAssertMalformed104(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.104.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1581,
        );
    }

    #[Depends('testAssertMalformed104')]
    public function testAssertMalformed105(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.105.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1596,
        );
    }

    #[Depends('testAssertMalformed105')]
    public function testAssertMalformed106(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.106.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1611,
        );
    }

    #[Depends('testAssertMalformed106')]
    public function testAssertMalformed107(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.107.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1626,
        );
    }

    #[Depends('testAssertMalformed107')]
    public function testAssertMalformed108(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.108.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1641,
        );
    }

    #[Depends('testAssertMalformed108')]
    public function testAssertMalformed109(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.109.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1656,
        );
    }

    #[Depends('testAssertMalformed109')]
    public function testAssertMalformed110(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.110.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1671,
        );
    }

    #[Depends('testAssertMalformed110')]
    public function testAssertMalformed111(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.111.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1686,
        );
    }

    #[Depends('testAssertMalformed111')]
    public function testAssertMalformed112(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.112.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1701,
        );
    }

    #[Depends('testAssertMalformed112')]
    public function testAssertMalformed113(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.113.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1716,
        );
    }

    #[Depends('testAssertMalformed113')]
    public function testAssertMalformed114(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.114.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1733,
        );
    }

    #[Depends('testAssertMalformed114')]
    public function testAssertMalformed115(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.115.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1748,
        );
    }

    #[Depends('testAssertMalformed115')]
    public function testAssertMalformed116(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.116.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1763,
        );
    }

    #[Depends('testAssertMalformed116')]
    public function testAssertMalformed117(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.117.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1778,
        );
    }

    #[Depends('testAssertMalformed117')]
    public function testAssertMalformed118(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.118.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1793,
        );
    }

    #[Depends('testAssertMalformed118')]
    public function testAssertMalformed119(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.119.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1808,
        );
    }

    #[Depends('testAssertMalformed119')]
    public function testAssertMalformed120(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.120.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1823,
        );
    }

    #[Depends('testAssertMalformed120')]
    public function testAssertMalformed121(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.121.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1838,
        );
    }

    #[Depends('testAssertMalformed121')]
    public function testAssertMalformed122(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.122.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1853,
        );
    }

    #[Depends('testAssertMalformed122')]
    public function testAssertMalformed123(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.123.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1868,
        );
    }

    #[Depends('testAssertMalformed123')]
    public function testAssertMalformed124(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.124.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1883,
        );
    }

    #[Depends('testAssertMalformed124')]
    public function testAssertMalformed125(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.125.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1898,
        );
    }

    #[Depends('testAssertMalformed125')]
    public function testAssertMalformed126(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.126.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1913,
        );
    }

    #[Depends('testAssertMalformed126')]
    public function testAssertMalformed127(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.127.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1928,
        );
    }

    #[Depends('testAssertMalformed127')]
    public function testAssertMalformed128(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.128.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1943,
        );
    }

    #[Depends('testAssertMalformed128')]
    public function testAssertMalformed129(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.129.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1958,
        );
    }

    #[Depends('testAssertMalformed129')]
    public function testAssertMalformed130(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.130.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1975,
        );
    }

    #[Depends('testAssertMalformed130')]
    public function testAssertMalformed131(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.131.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1990,
        );
    }

    #[Depends('testAssertMalformed131')]
    public function testAssertMalformed132(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.132.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2005,
        );
    }

    #[Depends('testAssertMalformed132')]
    public function testAssertMalformed133(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.133.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2020,
        );
    }

    #[Depends('testAssertMalformed133')]
    public function testAssertMalformed134(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.134.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2035,
        );
    }

    #[Depends('testAssertMalformed134')]
    public function testAssertMalformed135(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.135.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2050,
        );
    }

    #[Depends('testAssertMalformed135')]
    public function testAssertMalformed136(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.136.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2065,
        );
    }

    #[Depends('testAssertMalformed136')]
    public function testAssertMalformed137(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.137.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2080,
        );
    }

    #[Depends('testAssertMalformed137')]
    public function testAssertMalformed138(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.138.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2095,
        );
    }

    #[Depends('testAssertMalformed138')]
    public function testAssertMalformed139(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.139.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2110,
        );
    }

    #[Depends('testAssertMalformed139')]
    public function testAssertMalformed140(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.140.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2125,
        );
    }

    #[Depends('testAssertMalformed140')]
    public function testAssertMalformed141(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.141.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2140,
        );
    }

    #[Depends('testAssertMalformed141')]
    public function testAssertMalformed142(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.142.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2155,
        );
    }

    #[Depends('testAssertMalformed142')]
    public function testAssertMalformed143(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.143.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2170,
        );
    }

    #[Depends('testAssertMalformed143')]
    public function testAssertMalformed144(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.144.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2185,
        );
    }

    #[Depends('testAssertMalformed144')]
    public function testAssertMalformed145(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.145.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2200,
        );
    }

    #[Depends('testAssertMalformed145')]
    public function testAssertMalformed146(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.146.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2217,
        );
    }

    #[Depends('testAssertMalformed146')]
    public function testAssertMalformed147(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.147.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2232,
        );
    }

    #[Depends('testAssertMalformed147')]
    public function testAssertMalformed148(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.148.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2247,
        );
    }

    #[Depends('testAssertMalformed148')]
    public function testAssertMalformed149(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.149.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2262,
        );
    }

    #[Depends('testAssertMalformed149')]
    public function testAssertMalformed150(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.150.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2277,
        );
    }

    #[Depends('testAssertMalformed150')]
    public function testAssertMalformed151(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.151.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2292,
        );
    }

    #[Depends('testAssertMalformed151')]
    public function testAssertMalformed152(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.152.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2307,
        );
    }

    #[Depends('testAssertMalformed152')]
    public function testAssertMalformed153(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.153.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2322,
        );
    }

    #[Depends('testAssertMalformed153')]
    public function testAssertMalformed154(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.154.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2337,
        );
    }

    #[Depends('testAssertMalformed154')]
    public function testAssertMalformed155(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.155.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2354,
        );
    }

    #[Depends('testAssertMalformed155')]
    public function testAssertMalformed156(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.156.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2369,
        );
    }

    #[Depends('testAssertMalformed156')]
    public function testAssertMalformed157(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.157.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2386,
        );
    }

    #[Depends('testAssertMalformed157')]
    public function testAssertMalformed158(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.158.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2401,
        );
    }

    #[Depends('testAssertMalformed158')]
    public function testAssertMalformed159(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.159.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2416,
        );
    }

    #[Depends('testAssertMalformed159')]
    public function testAssertMalformed160(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.160.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2431,
        );
    }

    #[Depends('testAssertMalformed160')]
    public function testAssertMalformed161(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.161.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2446,
        );
    }

    #[Depends('testAssertMalformed161')]
    public function testAssertMalformed162(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.162.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2461,
        );
    }

    #[Depends('testAssertMalformed162')]
    public function testAssertMalformed163(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.163.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2476,
        );
    }

    #[Depends('testAssertMalformed163')]
    public function testAssertMalformed164(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.164.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2491,
        );
    }

    #[Depends('testAssertMalformed164')]
    public function testAssertMalformed165(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.165.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2506,
        );
    }

    #[Depends('testAssertMalformed165')]
    public function testAssertMalformed166(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.166.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2521,
        );
    }

    #[Depends('testAssertMalformed166')]
    public function testAssertMalformed167(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.167.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2536,
        );
    }

    #[Depends('testAssertMalformed167')]
    public function testAssertMalformed168(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.168.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2553,
        );
    }

    #[Depends('testAssertMalformed168')]
    public function testAssertMalformed169(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.169.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2568,
        );
    }

    #[Depends('testAssertMalformed169')]
    public function testAssertMalformed170(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.170.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2585,
        );
    }

    #[Depends('testAssertMalformed170')]
    public function testAssertMalformed171(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.171.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2600,
        );
    }

    #[Depends('testAssertMalformed171')]
    public function testAssertMalformed172(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.172.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2615,
        );
    }

    #[Depends('testAssertMalformed172')]
    public function testAssertMalformed173(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.173.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2630,
        );
    }

    #[Depends('testAssertMalformed173')]
    public function testAssertMalformed174(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.174.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2645,
        );
    }

    #[Depends('testAssertMalformed174')]
    public function testAssertMalformed175(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-module.175.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2660,
        );
    }
}
