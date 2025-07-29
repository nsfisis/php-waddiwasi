<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class Utf8ImportFieldTest extends SpecTestsuiteBase
{
    public function testAssertMalformed0(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.0.wasm',
            text: 'malformed UTF-8 encoding',
            line: 7,
        );
    }

    public function testAssertMalformed1(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.1.wasm',
            text: 'malformed UTF-8 encoding',
            line: 22,
        );
    }

    public function testAssertMalformed2(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.2.wasm',
            text: 'malformed UTF-8 encoding',
            line: 37,
        );
    }

    public function testAssertMalformed3(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.3.wasm',
            text: 'malformed UTF-8 encoding',
            line: 52,
        );
    }

    public function testAssertMalformed4(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.4.wasm',
            text: 'malformed UTF-8 encoding',
            line: 67,
        );
    }

    public function testAssertMalformed5(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.5.wasm',
            text: 'malformed UTF-8 encoding',
            line: 82,
        );
    }

    public function testAssertMalformed6(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.6.wasm',
            text: 'malformed UTF-8 encoding',
            line: 99,
        );
    }

    public function testAssertMalformed7(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.7.wasm',
            text: 'malformed UTF-8 encoding',
            line: 114,
        );
    }

    public function testAssertMalformed8(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.8.wasm',
            text: 'malformed UTF-8 encoding',
            line: 129,
        );
    }

    public function testAssertMalformed9(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.9.wasm',
            text: 'malformed UTF-8 encoding',
            line: 146,
        );
    }

    public function testAssertMalformed10(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.10.wasm',
            text: 'malformed UTF-8 encoding',
            line: 161,
        );
    }

    public function testAssertMalformed11(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.11.wasm',
            text: 'malformed UTF-8 encoding',
            line: 176,
        );
    }

    public function testAssertMalformed12(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.12.wasm',
            text: 'malformed UTF-8 encoding',
            line: 191,
        );
    }

    public function testAssertMalformed13(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.13.wasm',
            text: 'malformed UTF-8 encoding',
            line: 206,
        );
    }

    public function testAssertMalformed14(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.14.wasm',
            text: 'malformed UTF-8 encoding',
            line: 221,
        );
    }

    public function testAssertMalformed15(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.15.wasm',
            text: 'malformed UTF-8 encoding',
            line: 236,
        );
    }

    public function testAssertMalformed16(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.16.wasm',
            text: 'malformed UTF-8 encoding',
            line: 251,
        );
    }

    public function testAssertMalformed17(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.17.wasm',
            text: 'malformed UTF-8 encoding',
            line: 266,
        );
    }

    public function testAssertMalformed18(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.18.wasm',
            text: 'malformed UTF-8 encoding',
            line: 281,
        );
    }

    public function testAssertMalformed19(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.19.wasm',
            text: 'malformed UTF-8 encoding',
            line: 296,
        );
    }

    public function testAssertMalformed20(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.20.wasm',
            text: 'malformed UTF-8 encoding',
            line: 311,
        );
    }

    public function testAssertMalformed21(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.21.wasm',
            text: 'malformed UTF-8 encoding',
            line: 328,
        );
    }

    public function testAssertMalformed22(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.22.wasm',
            text: 'malformed UTF-8 encoding',
            line: 343,
        );
    }

    public function testAssertMalformed23(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.23.wasm',
            text: 'malformed UTF-8 encoding',
            line: 358,
        );
    }

    public function testAssertMalformed24(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.24.wasm',
            text: 'malformed UTF-8 encoding',
            line: 373,
        );
    }

    public function testAssertMalformed25(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.25.wasm',
            text: 'malformed UTF-8 encoding',
            line: 388,
        );
    }

    public function testAssertMalformed26(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.26.wasm',
            text: 'malformed UTF-8 encoding',
            line: 405,
        );
    }

    public function testAssertMalformed27(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.27.wasm',
            text: 'malformed UTF-8 encoding',
            line: 420,
        );
    }

    public function testAssertMalformed28(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.28.wasm',
            text: 'malformed UTF-8 encoding',
            line: 435,
        );
    }

    public function testAssertMalformed29(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.29.wasm',
            text: 'malformed UTF-8 encoding',
            line: 450,
        );
    }

    public function testAssertMalformed30(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.30.wasm',
            text: 'malformed UTF-8 encoding',
            line: 465,
        );
    }

    public function testAssertMalformed31(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.31.wasm',
            text: 'malformed UTF-8 encoding',
            line: 480,
        );
    }

    public function testAssertMalformed32(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.32.wasm',
            text: 'malformed UTF-8 encoding',
            line: 495,
        );
    }

    public function testAssertMalformed33(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.33.wasm',
            text: 'malformed UTF-8 encoding',
            line: 510,
        );
    }

    public function testAssertMalformed34(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.34.wasm',
            text: 'malformed UTF-8 encoding',
            line: 525,
        );
    }

    public function testAssertMalformed35(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.35.wasm',
            text: 'malformed UTF-8 encoding',
            line: 540,
        );
    }

    public function testAssertMalformed36(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.36.wasm',
            text: 'malformed UTF-8 encoding',
            line: 555,
        );
    }

    public function testAssertMalformed37(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.37.wasm',
            text: 'malformed UTF-8 encoding',
            line: 570,
        );
    }

    public function testAssertMalformed38(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.38.wasm',
            text: 'malformed UTF-8 encoding',
            line: 585,
        );
    }

    public function testAssertMalformed39(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.39.wasm',
            text: 'malformed UTF-8 encoding',
            line: 600,
        );
    }

    public function testAssertMalformed40(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.40.wasm',
            text: 'malformed UTF-8 encoding',
            line: 615,
        );
    }

    public function testAssertMalformed41(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.41.wasm',
            text: 'malformed UTF-8 encoding',
            line: 630,
        );
    }

    public function testAssertMalformed42(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.42.wasm',
            text: 'malformed UTF-8 encoding',
            line: 645,
        );
    }

    public function testAssertMalformed43(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.43.wasm',
            text: 'malformed UTF-8 encoding',
            line: 660,
        );
    }

    public function testAssertMalformed44(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.44.wasm',
            text: 'malformed UTF-8 encoding',
            line: 675,
        );
    }

    public function testAssertMalformed45(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.45.wasm',
            text: 'malformed UTF-8 encoding',
            line: 690,
        );
    }

    public function testAssertMalformed46(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.46.wasm',
            text: 'malformed UTF-8 encoding',
            line: 705,
        );
    }

    public function testAssertMalformed47(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.47.wasm',
            text: 'malformed UTF-8 encoding',
            line: 720,
        );
    }

    public function testAssertMalformed48(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.48.wasm',
            text: 'malformed UTF-8 encoding',
            line: 735,
        );
    }

    public function testAssertMalformed49(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.49.wasm',
            text: 'malformed UTF-8 encoding',
            line: 750,
        );
    }

    public function testAssertMalformed50(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.50.wasm',
            text: 'malformed UTF-8 encoding',
            line: 765,
        );
    }

    public function testAssertMalformed51(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.51.wasm',
            text: 'malformed UTF-8 encoding',
            line: 780,
        );
    }

    public function testAssertMalformed52(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.52.wasm',
            text: 'malformed UTF-8 encoding',
            line: 795,
        );
    }

    public function testAssertMalformed53(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.53.wasm',
            text: 'malformed UTF-8 encoding',
            line: 810,
        );
    }

    public function testAssertMalformed54(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.54.wasm',
            text: 'malformed UTF-8 encoding',
            line: 825,
        );
    }

    public function testAssertMalformed55(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.55.wasm',
            text: 'malformed UTF-8 encoding',
            line: 840,
        );
    }

    public function testAssertMalformed56(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.56.wasm',
            text: 'malformed UTF-8 encoding',
            line: 855,
        );
    }

    public function testAssertMalformed57(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.57.wasm',
            text: 'malformed UTF-8 encoding',
            line: 870,
        );
    }

    public function testAssertMalformed58(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.58.wasm',
            text: 'malformed UTF-8 encoding',
            line: 887,
        );
    }

    public function testAssertMalformed59(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.59.wasm',
            text: 'malformed UTF-8 encoding',
            line: 902,
        );
    }

    public function testAssertMalformed60(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.60.wasm',
            text: 'malformed UTF-8 encoding',
            line: 917,
        );
    }

    public function testAssertMalformed61(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.61.wasm',
            text: 'malformed UTF-8 encoding',
            line: 932,
        );
    }

    public function testAssertMalformed62(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.62.wasm',
            text: 'malformed UTF-8 encoding',
            line: 947,
        );
    }

    public function testAssertMalformed63(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.63.wasm',
            text: 'malformed UTF-8 encoding',
            line: 962,
        );
    }

    public function testAssertMalformed64(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.64.wasm',
            text: 'malformed UTF-8 encoding',
            line: 977,
        );
    }

    public function testAssertMalformed65(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.65.wasm',
            text: 'malformed UTF-8 encoding',
            line: 992,
        );
    }

    public function testAssertMalformed66(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.66.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1007,
        );
    }

    public function testAssertMalformed67(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.67.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1022,
        );
    }

    public function testAssertMalformed68(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.68.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1037,
        );
    }

    public function testAssertMalformed69(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.69.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1052,
        );
    }

    public function testAssertMalformed70(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.70.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1067,
        );
    }

    public function testAssertMalformed71(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.71.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1082,
        );
    }

    public function testAssertMalformed72(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.72.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1097,
        );
    }

    public function testAssertMalformed73(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.73.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1112,
        );
    }

    public function testAssertMalformed74(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.74.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1127,
        );
    }

    public function testAssertMalformed75(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.75.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1142,
        );
    }

    public function testAssertMalformed76(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.76.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1157,
        );
    }

    public function testAssertMalformed77(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.77.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1172,
        );
    }

    public function testAssertMalformed78(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.78.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1187,
        );
    }

    public function testAssertMalformed79(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.79.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1202,
        );
    }

    public function testAssertMalformed80(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.80.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1217,
        );
    }

    public function testAssertMalformed81(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.81.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1232,
        );
    }

    public function testAssertMalformed82(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.82.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1249,
        );
    }

    public function testAssertMalformed83(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.83.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1264,
        );
    }

    public function testAssertMalformed84(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.84.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1279,
        );
    }

    public function testAssertMalformed85(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.85.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1294,
        );
    }

    public function testAssertMalformed86(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.86.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1309,
        );
    }

    public function testAssertMalformed87(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.87.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1324,
        );
    }

    public function testAssertMalformed88(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.88.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1339,
        );
    }

    public function testAssertMalformed89(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.89.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1356,
        );
    }

    public function testAssertMalformed90(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.90.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1371,
        );
    }

    public function testAssertMalformed91(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.91.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1386,
        );
    }

    public function testAssertMalformed92(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.92.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1401,
        );
    }

    public function testAssertMalformed93(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.93.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1416,
        );
    }

    public function testAssertMalformed94(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.94.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1431,
        );
    }

    public function testAssertMalformed95(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.95.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1446,
        );
    }

    public function testAssertMalformed96(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.96.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1461,
        );
    }

    public function testAssertMalformed97(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.97.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1476,
        );
    }

    public function testAssertMalformed98(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.98.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1491,
        );
    }

    public function testAssertMalformed99(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.99.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1506,
        );
    }

    public function testAssertMalformed100(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.100.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1521,
        );
    }

    public function testAssertMalformed101(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.101.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1536,
        );
    }

    public function testAssertMalformed102(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.102.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1551,
        );
    }

    public function testAssertMalformed103(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.103.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1566,
        );
    }

    public function testAssertMalformed104(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.104.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1581,
        );
    }

    public function testAssertMalformed105(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.105.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1596,
        );
    }

    public function testAssertMalformed106(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.106.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1611,
        );
    }

    public function testAssertMalformed107(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.107.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1626,
        );
    }

    public function testAssertMalformed108(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.108.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1641,
        );
    }

    public function testAssertMalformed109(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.109.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1656,
        );
    }

    public function testAssertMalformed110(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.110.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1671,
        );
    }

    public function testAssertMalformed111(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.111.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1686,
        );
    }

    public function testAssertMalformed112(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.112.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1701,
        );
    }

    public function testAssertMalformed113(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.113.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1716,
        );
    }

    public function testAssertMalformed114(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.114.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1733,
        );
    }

    public function testAssertMalformed115(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.115.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1748,
        );
    }

    public function testAssertMalformed116(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.116.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1763,
        );
    }

    public function testAssertMalformed117(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.117.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1778,
        );
    }

    public function testAssertMalformed118(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.118.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1793,
        );
    }

    public function testAssertMalformed119(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.119.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1808,
        );
    }

    public function testAssertMalformed120(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.120.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1823,
        );
    }

    public function testAssertMalformed121(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.121.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1838,
        );
    }

    public function testAssertMalformed122(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.122.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1853,
        );
    }

    public function testAssertMalformed123(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.123.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1868,
        );
    }

    public function testAssertMalformed124(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.124.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1883,
        );
    }

    public function testAssertMalformed125(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.125.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1898,
        );
    }

    public function testAssertMalformed126(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.126.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1913,
        );
    }

    public function testAssertMalformed127(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.127.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1928,
        );
    }

    public function testAssertMalformed128(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.128.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1943,
        );
    }

    public function testAssertMalformed129(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.129.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1958,
        );
    }

    public function testAssertMalformed130(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.130.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1975,
        );
    }

    public function testAssertMalformed131(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.131.wasm',
            text: 'malformed UTF-8 encoding',
            line: 1990,
        );
    }

    public function testAssertMalformed132(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.132.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2005,
        );
    }

    public function testAssertMalformed133(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.133.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2020,
        );
    }

    public function testAssertMalformed134(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.134.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2035,
        );
    }

    public function testAssertMalformed135(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.135.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2050,
        );
    }

    public function testAssertMalformed136(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.136.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2065,
        );
    }

    public function testAssertMalformed137(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.137.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2080,
        );
    }

    public function testAssertMalformed138(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.138.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2095,
        );
    }

    public function testAssertMalformed139(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.139.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2110,
        );
    }

    public function testAssertMalformed140(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.140.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2125,
        );
    }

    public function testAssertMalformed141(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.141.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2140,
        );
    }

    public function testAssertMalformed142(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.142.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2155,
        );
    }

    public function testAssertMalformed143(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.143.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2170,
        );
    }

    public function testAssertMalformed144(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.144.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2185,
        );
    }

    public function testAssertMalformed145(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.145.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2200,
        );
    }

    public function testAssertMalformed146(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.146.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2217,
        );
    }

    public function testAssertMalformed147(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.147.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2232,
        );
    }

    public function testAssertMalformed148(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.148.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2247,
        );
    }

    public function testAssertMalformed149(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.149.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2262,
        );
    }

    public function testAssertMalformed150(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.150.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2277,
        );
    }

    public function testAssertMalformed151(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.151.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2292,
        );
    }

    public function testAssertMalformed152(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.152.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2307,
        );
    }

    public function testAssertMalformed153(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.153.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2322,
        );
    }

    public function testAssertMalformed154(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.154.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2337,
        );
    }

    public function testAssertMalformed155(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.155.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2354,
        );
    }

    public function testAssertMalformed156(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.156.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2369,
        );
    }

    public function testAssertMalformed157(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.157.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2386,
        );
    }

    public function testAssertMalformed158(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.158.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2401,
        );
    }

    public function testAssertMalformed159(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.159.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2416,
        );
    }

    public function testAssertMalformed160(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.160.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2431,
        );
    }

    public function testAssertMalformed161(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.161.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2446,
        );
    }

    public function testAssertMalformed162(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.162.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2461,
        );
    }

    public function testAssertMalformed163(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.163.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2476,
        );
    }

    public function testAssertMalformed164(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.164.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2491,
        );
    }

    public function testAssertMalformed165(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.165.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2506,
        );
    }

    public function testAssertMalformed166(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.166.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2521,
        );
    }

    public function testAssertMalformed167(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.167.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2536,
        );
    }

    public function testAssertMalformed168(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.168.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2553,
        );
    }

    public function testAssertMalformed169(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.169.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2568,
        );
    }

    public function testAssertMalformed170(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.170.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2585,
        );
    }

    public function testAssertMalformed171(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.171.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2600,
        );
    }

    public function testAssertMalformed172(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.172.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2615,
        );
    }

    public function testAssertMalformed173(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.173.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2630,
        );
    }

    public function testAssertMalformed174(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.174.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2645,
        );
    }

    public function testAssertMalformed175(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'utf8-import-field.175.wasm',
            text: 'malformed UTF-8 encoding',
            line: 2660,
        );
    }
}
