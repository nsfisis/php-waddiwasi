<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;

final class BinaryTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'binary.0.wasm',
            name: null,
            line: 1,
        );
    }

    #[Depends('testModule0')]
    public function testModule1(): void
    {
        $this->runModuleCommand(
            filename: 'binary.1.wasm',
            name: null,
            line: 2,
        );
    }

    #[Depends('testModule1')]
    public function testModule2(): void
    {
        $this->runModuleCommand(
            filename: 'binary.2.wasm',
            name: '$M1',
            line: 3,
        );
    }

    #[Depends('testModule2')]
    public function testModule3(): void
    {
        $this->runModuleCommand(
            filename: 'binary.3.wasm',
            name: '$M2',
            line: 4,
        );
    }

    #[Depends('testModule3')]
    public function testAssertMalformed4(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.4.wasm',
            text: 'unexpected end',
            line: 6,
        );
    }

    #[Depends('testAssertMalformed4')]
    public function testAssertMalformed5(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.5.wasm',
            text: 'unexpected end',
            line: 7,
        );
    }

    #[Depends('testAssertMalformed5')]
    public function testAssertMalformed6(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.6.wasm',
            text: 'unexpected end',
            line: 8,
        );
    }

    #[Depends('testAssertMalformed6')]
    public function testAssertMalformed7(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.7.wasm',
            text: 'magic header not detected',
            line: 9,
        );
    }

    #[Depends('testAssertMalformed7')]
    public function testAssertMalformed8(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.8.wasm',
            text: 'magic header not detected',
            line: 10,
        );
    }

    #[Depends('testAssertMalformed8')]
    public function testAssertMalformed9(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.9.wasm',
            text: 'magic header not detected',
            line: 11,
        );
    }

    #[Depends('testAssertMalformed9')]
    public function testAssertMalformed10(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.10.wasm',
            text: 'magic header not detected',
            line: 12,
        );
    }

    #[Depends('testAssertMalformed10')]
    public function testAssertMalformed11(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.11.wasm',
            text: 'magic header not detected',
            line: 13,
        );
    }

    #[Depends('testAssertMalformed11')]
    public function testAssertMalformed12(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.12.wasm',
            text: 'magic header not detected',
            line: 14,
        );
    }

    #[Depends('testAssertMalformed12')]
    public function testAssertMalformed13(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.13.wasm',
            text: 'magic header not detected',
            line: 15,
        );
    }

    #[Depends('testAssertMalformed13')]
    public function testAssertMalformed14(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.14.wasm',
            text: 'magic header not detected',
            line: 16,
        );
    }

    #[Depends('testAssertMalformed14')]
    public function testAssertMalformed15(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.15.wasm',
            text: 'magic header not detected',
            line: 17,
        );
    }

    #[Depends('testAssertMalformed15')]
    public function testAssertMalformed16(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.16.wasm',
            text: 'magic header not detected',
            line: 18,
        );
    }

    #[Depends('testAssertMalformed16')]
    public function testAssertMalformed17(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.17.wasm',
            text: 'magic header not detected',
            line: 21,
        );
    }

    #[Depends('testAssertMalformed17')]
    public function testAssertMalformed18(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.18.wasm',
            text: 'magic header not detected',
            line: 24,
        );
    }

    #[Depends('testAssertMalformed18')]
    public function testAssertMalformed19(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.19.wasm',
            text: 'magic header not detected',
            line: 25,
        );
    }

    #[Depends('testAssertMalformed19')]
    public function testAssertMalformed20(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.20.wasm',
            text: 'magic header not detected',
            line: 28,
        );
    }

    #[Depends('testAssertMalformed20')]
    public function testAssertMalformed21(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.21.wasm',
            text: 'magic header not detected',
            line: 31,
        );
    }

    #[Depends('testAssertMalformed21')]
    public function testAssertMalformed22(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.22.wasm',
            text: 'magic header not detected',
            line: 34,
        );
    }

    #[Depends('testAssertMalformed22')]
    public function testAssertMalformed23(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.23.wasm',
            text: 'unexpected end',
            line: 37,
        );
    }

    #[Depends('testAssertMalformed23')]
    public function testAssertMalformed24(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.24.wasm',
            text: 'unexpected end',
            line: 38,
        );
    }

    #[Depends('testAssertMalformed24')]
    public function testAssertMalformed25(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.25.wasm',
            text: 'unexpected end',
            line: 39,
        );
    }

    #[Depends('testAssertMalformed25')]
    public function testAssertMalformed26(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.26.wasm',
            text: 'unknown binary version',
            line: 40,
        );
    }

    #[Depends('testAssertMalformed26')]
    public function testAssertMalformed27(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.27.wasm',
            text: 'unknown binary version',
            line: 41,
        );
    }

    #[Depends('testAssertMalformed27')]
    public function testAssertMalformed28(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.28.wasm',
            text: 'unknown binary version',
            line: 42,
        );
    }

    #[Depends('testAssertMalformed28')]
    public function testAssertMalformed29(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.29.wasm',
            text: 'unknown binary version',
            line: 43,
        );
    }

    #[Depends('testAssertMalformed29')]
    public function testAssertMalformed30(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.30.wasm',
            text: 'unknown binary version',
            line: 44,
        );
    }

    #[Depends('testAssertMalformed30')]
    public function testAssertMalformed31(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.31.wasm',
            text: 'unknown binary version',
            line: 45,
        );
    }

    #[Depends('testAssertMalformed31')]
    public function testAssertMalformed32(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.32.wasm',
            text: 'malformed section id',
            line: 48,
        );
    }

    #[Depends('testAssertMalformed32')]
    public function testAssertMalformed33(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.33.wasm',
            text: 'malformed section id',
            line: 49,
        );
    }

    #[Depends('testAssertMalformed33')]
    public function testAssertMalformed34(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.34.wasm',
            text: 'malformed section id',
            line: 50,
        );
    }

    #[Depends('testAssertMalformed34')]
    public function testAssertMalformed35(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.35.wasm',
            text: 'malformed section id',
            line: 51,
        );
    }

    #[Depends('testAssertMalformed35')]
    public function testAssertMalformed36(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.36.wasm',
            text: 'malformed section id',
            line: 52,
        );
    }

    #[Depends('testAssertMalformed36')]
    public function testAssertMalformed37(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.37.wasm',
            text: 'END opcode expected',
            line: 56,
        );
    }

    #[Depends('testAssertMalformed37')]
    public function testAssertMalformed38(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.38.wasm',
            text: 'unexpected end of section or function',
            line: 77,
        );
    }

    #[Depends('testAssertMalformed38')]
    public function testAssertMalformed39(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.39.wasm',
            text: 'section size mismatch',
            line: 93,
        );
    }

    #[Depends('testAssertMalformed39')]
    public function testAssertMalformed40(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.40.wasm',
            text: 'illegal opcode',
            line: 113,
        );
    }

    #[Depends('testAssertMalformed40')]
    public function testAssertMalformed41(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.41.wasm',
            text: 'zero byte expected',
            line: 126,
        );
    }

    #[Depends('testAssertMalformed41')]
    public function testAssertMalformed42(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.42.wasm',
            text: 'zero byte expected',
            line: 146,
        );
    }

    #[Depends('testAssertMalformed42')]
    public function testAssertMalformed43(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.43.wasm',
            text: 'zero byte expected',
            line: 166,
        );
    }

    #[Depends('testAssertMalformed43')]
    public function testAssertMalformed44(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.44.wasm',
            text: 'zero byte expected',
            line: 185,
        );
    }

    #[Depends('testAssertMalformed44')]
    public function testAssertMalformed45(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.45.wasm',
            text: 'zero byte expected',
            line: 204,
        );
    }

    #[Depends('testAssertMalformed45')]
    public function testAssertMalformed46(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.46.wasm',
            text: 'zero byte expected',
            line: 224,
        );
    }

    #[Depends('testAssertMalformed46')]
    public function testAssertMalformed47(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.47.wasm',
            text: 'zero byte expected',
            line: 243,
        );
    }

    #[Depends('testAssertMalformed47')]
    public function testAssertMalformed48(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.48.wasm',
            text: 'zero byte expected',
            line: 262,
        );
    }

    #[Depends('testAssertMalformed48')]
    public function testAssertMalformed49(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.49.wasm',
            text: 'zero byte expected',
            line: 280,
        );
    }

    #[Depends('testAssertMalformed49')]
    public function testAssertMalformed50(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.50.wasm',
            text: 'zero byte expected',
            line: 298,
        );
    }

    #[Depends('testAssertMalformed50')]
    public function testAssertMalformed51(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.51.wasm',
            text: 'integer too large',
            line: 317,
        );
    }

    #[Depends('testAssertMalformed51')]
    public function testAssertMalformed52(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.52.wasm',
            text: 'integer too large',
            line: 334,
        );
    }

    #[Depends('testAssertMalformed52')]
    public function testAssertMalformed53(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.53.wasm',
            text: 'too many locals',
            line: 351,
        );
    }

    #[Depends('testAssertMalformed53')]
    public function testAssertMalformed54(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.54.wasm',
            text: 'too many locals',
            line: 367,
        );
    }

    #[Depends('testAssertMalformed54')]
    public function testModule55(): void
    {
        $this->runModuleCommand(
            filename: 'binary.55.wasm',
            name: null,
            line: 385,
        );
    }

    #[Depends('testModule55')]
    public function testAssertMalformed56(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.56.wasm',
            text: 'function and code section have inconsistent lengths',
            line: 401,
        );
    }

    #[Depends('testAssertMalformed56')]
    public function testAssertMalformed57(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.57.wasm',
            text: 'function and code section have inconsistent lengths',
            line: 411,
        );
    }

    #[Depends('testAssertMalformed57')]
    public function testAssertMalformed58(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.58.wasm',
            text: 'function and code section have inconsistent lengths',
            line: 420,
        );
    }

    #[Depends('testAssertMalformed58')]
    public function testAssertMalformed59(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.59.wasm',
            text: 'function and code section have inconsistent lengths',
            line: 431,
        );
    }

    #[Depends('testAssertMalformed59')]
    public function testModule60(): void
    {
        $this->runModuleCommand(
            filename: 'binary.60.wasm',
            name: null,
            line: 441,
        );
    }

    #[Depends('testModule60')]
    public function testModule61(): void
    {
        $this->runModuleCommand(
            filename: 'binary.61.wasm',
            name: null,
            line: 447,
        );
    }

    #[Depends('testModule61')]
    public function testAssertMalformed62(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.62.wasm',
            text: 'data count and data section have inconsistent lengths',
            line: 454,
        );
    }

    #[Depends('testAssertMalformed62')]
    public function testAssertMalformed63(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.63.wasm',
            text: 'data count and data section have inconsistent lengths',
            line: 464,
        );
    }

    #[Depends('testAssertMalformed63')]
    public function testAssertMalformed64(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.64.wasm',
            text: 'data count section required',
            line: 474,
        );
    }

    #[Depends('testAssertMalformed64')]
    public function testAssertMalformed65(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.65.wasm',
            text: 'data count section required',
            line: 496,
        );
    }

    #[Depends('testAssertMalformed65')]
    public function testAssertMalformed66(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.66.wasm',
            text: 'illegal opcode',
            line: 515,
        );
    }

    #[Depends('testAssertMalformed66')]
    public function testAssertMalformed67(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.67.wasm',
            text: 'malformed reference type',
            line: 541,
        );
    }

    #[Depends('testAssertMalformed67')]
    public function testModule68(): void
    {
        $this->runModuleCommand(
            filename: 'binary.68.wasm',
            name: null,
            line: 566,
        );
    }

    #[Depends('testModule68')]
    public function testModule69(): void
    {
        $this->runModuleCommand(
            filename: 'binary.69.wasm',
            name: null,
            line: 590,
        );
    }

    #[Depends('testModule69')]
    public function testModule70(): void
    {
        $this->runModuleCommand(
            filename: 'binary.70.wasm',
            name: null,
            line: 615,
        );
    }

    #[Depends('testModule70')]
    public function testAssertMalformed71(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.71.wasm',
            text: 'length out of bounds',
            line: 622,
        );
    }

    #[Depends('testAssertMalformed71')]
    public function testAssertMalformed72(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.72.wasm',
            text: 'section size mismatch',
            line: 633,
        );
    }

    #[Depends('testAssertMalformed72')]
    public function testModule73(): void
    {
        $this->runModuleCommand(
            filename: 'binary.73.wasm',
            name: null,
            line: 643,
        );
    }

    #[Depends('testModule73')]
    public function testAssertMalformed74(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.74.wasm',
            text: 'malformed import kind',
            line: 652,
        );
    }

    #[Depends('testAssertMalformed74')]
    public function testAssertMalformed75(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.75.wasm',
            text: 'malformed import kind',
            line: 662,
        );
    }

    #[Depends('testAssertMalformed75')]
    public function testAssertMalformed76(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.76.wasm',
            text: 'malformed import kind',
            line: 673,
        );
    }

    #[Depends('testAssertMalformed76')]
    public function testAssertMalformed77(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.77.wasm',
            text: 'malformed import kind',
            line: 683,
        );
    }

    #[Depends('testAssertMalformed77')]
    public function testAssertMalformed78(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.78.wasm',
            text: 'malformed import kind',
            line: 694,
        );
    }

    #[Depends('testAssertMalformed78')]
    public function testAssertMalformed79(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.79.wasm',
            text: 'malformed import kind',
            line: 704,
        );
    }

    #[Depends('testAssertMalformed79')]
    public function testAssertMalformed80(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.80.wasm',
            text: 'unexpected end of section or function',
            line: 717,
        );
    }

    #[Depends('testAssertMalformed80')]
    public function testAssertMalformed81(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.81.wasm',
            text: 'section size mismatch',
            line: 736,
        );
    }

    #[Depends('testAssertMalformed81')]
    public function testModule82(): void
    {
        $this->runModuleCommand(
            filename: 'binary.82.wasm',
            name: null,
            line: 760,
        );
    }

    #[Depends('testModule82')]
    public function testAssertMalformed83(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.83.wasm',
            text: 'unexpected end of section or function',
            line: 767,
        );
    }

    #[Depends('testAssertMalformed83')]
    public function testAssertMalformed84(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.84.wasm',
            text: 'integer too large',
            line: 777,
        );
    }

    #[Depends('testAssertMalformed84')]
    public function testAssertMalformed85(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.85.wasm',
            text: 'integer too large',
            line: 786,
        );
    }

    #[Depends('testAssertMalformed85')]
    public function testAssertMalformed86(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.86.wasm',
            text: 'integer representation too long',
            line: 796,
        );
    }

    #[Depends('testAssertMalformed86')]
    public function testModule87(): void
    {
        $this->runModuleCommand(
            filename: 'binary.87.wasm',
            name: null,
            line: 807,
        );
    }

    #[Depends('testModule87')]
    public function testAssertMalformed88(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.88.wasm',
            text: 'unexpected end of section or function',
            line: 814,
        );
    }

    #[Depends('testAssertMalformed88')]
    public function testAssertMalformed89(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.89.wasm',
            text: 'integer too large',
            line: 824,
        );
    }

    #[Depends('testAssertMalformed89')]
    public function testAssertMalformed90(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.90.wasm',
            text: 'integer too large',
            line: 832,
        );
    }

    #[Depends('testAssertMalformed90')]
    public function testAssertMalformed91(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.91.wasm',
            text: 'integer representation too long',
            line: 841,
        );
    }

    #[Depends('testAssertMalformed91')]
    public function testAssertMalformed92(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.92.wasm',
            text: 'integer representation too long',
            line: 850,
        );
    }

    #[Depends('testAssertMalformed92')]
    public function testModule93(): void
    {
        $this->runModuleCommand(
            filename: 'binary.93.wasm',
            name: null,
            line: 860,
        );
    }

    #[Depends('testModule93')]
    public function testAssertMalformed94(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.94.wasm',
            text: 'unexpected end of section or function',
            line: 867,
        );
    }

    #[Depends('testAssertMalformed94')]
    public function testAssertMalformed95(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.95.wasm',
            text: 'section size mismatch',
            line: 878,
        );
    }

    #[Depends('testAssertMalformed95')]
    public function testModule96(): void
    {
        $this->runModuleCommand(
            filename: 'binary.96.wasm',
            name: null,
            line: 888,
        );
    }

    #[Depends('testModule96')]
    public function testAssertMalformed97(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.97.wasm',
            text: 'length out of bounds',
            line: 901,
        );
    }

    #[Depends('testAssertMalformed97')]
    public function testAssertMalformed98(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.98.wasm',
            text: 'section size mismatch',
            line: 922,
        );
    }

    #[Depends('testAssertMalformed98')]
    public function testModule99(): void
    {
        $this->runModuleCommand(
            filename: 'binary.99.wasm',
            name: null,
            line: 942,
        );
    }

    #[Depends('testModule99')]
    public function testAssertMalformed100(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.100.wasm',
            text: 'unexpected end',
            line: 956,
        );
    }

    #[Depends('testAssertMalformed100')]
    public function testAssertMalformed101(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.101.wasm',
            text: 'unexpected end',
            line: 972,
        );
    }

    #[Depends('testAssertMalformed101')]
    public function testAssertMalformed102(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.102.wasm',
            text: 'section size mismatch',
            line: 989,
        );
    }

    #[Depends('testAssertMalformed102')]
    public function testModule103(): void
    {
        $this->runModuleCommand(
            filename: 'binary.103.wasm',
            name: null,
            line: 1006,
        );
    }

    #[Depends('testModule103')]
    public function testAssertMalformed104(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.104.wasm',
            text: 'unexpected end of section or function',
            line: 1015,
        );
    }

    #[Depends('testAssertMalformed104')]
    public function testAssertMalformed105(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.105.wasm',
            text: 'section size mismatch',
            line: 1028,
        );
    }

    #[Depends('testAssertMalformed105')]
    public function testAssertMalformed106(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.106.wasm',
            text: 'unexpected end of section or function',
            line: 1041,
        );
    }

    #[Depends('testAssertMalformed106')]
    public function testAssertMalformed107(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.107.wasm',
            text: 'section size mismatch',
            line: 1055,
        );
    }

    #[Depends('testAssertMalformed107')]
    public function testModule108(): void
    {
        $this->runModuleCommand(
            filename: 'binary.108.wasm',
            name: null,
            line: 1068,
        );
    }

    #[Depends('testModule108')]
    public function testAssertMalformed109(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.109.wasm',
            text: 'unexpected end',
            line: 1086,
        );
    }

    #[Depends('testAssertMalformed109')]
    public function testModule110(): void
    {
        $this->runModuleCommand(
            filename: 'binary.110.wasm',
            name: null,
            line: 1119,
        );
    }

    #[Depends('testModule110')]
    public function testAssertMalformed111(): void
    {
        $this->runAssertMalformedCommand(
            filename: 'binary.111.wasm',
            text: 'unexpected content after last section',
            line: 1133,
        );
    }
}
