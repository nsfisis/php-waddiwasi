<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class ConstTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'const.0.wasm',
            name: null,
            line: 5,
        );
    }

    #[Depends('testModule0')]
    public function testModule1(): void
    {
        $this->runModuleCommand(
            filename: 'const.1.wasm',
            name: null,
            line: 6,
        );
    }

    #[DoesNotPerformAssertions]
    #[Depends('testModule1')]
    public function testAssertMalformed2(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed2')]
    public function testAssertMalformed3(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed3')]
    public function testAssertMalformed4(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed4')]
    public function testAssertMalformed5(): void
    {
    }

    #[Depends('testAssertMalformed5')]
    public function testModule6(): void
    {
        $this->runModuleCommand(
            filename: 'const.6.wasm',
            name: null,
            line: 24,
        );
    }

    #[Depends('testModule6')]
    public function testModule7(): void
    {
        $this->runModuleCommand(
            filename: 'const.7.wasm',
            name: null,
            line: 25,
        );
    }

    #[DoesNotPerformAssertions]
    #[Depends('testModule7')]
    public function testAssertMalformed8(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed8')]
    public function testAssertMalformed9(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed9')]
    public function testAssertMalformed10(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed10')]
    public function testAssertMalformed11(): void
    {
    }

    #[Depends('testAssertMalformed11')]
    public function testModule12(): void
    {
        $this->runModuleCommand(
            filename: 'const.12.wasm',
            name: null,
            line: 43,
        );
    }

    #[Depends('testModule12')]
    public function testModule13(): void
    {
        $this->runModuleCommand(
            filename: 'const.13.wasm',
            name: null,
            line: 44,
        );
    }

    #[Depends('testModule13')]
    public function testModule14(): void
    {
        $this->runModuleCommand(
            filename: 'const.14.wasm',
            name: null,
            line: 45,
        );
    }

    #[Depends('testModule14')]
    public function testModule15(): void
    {
        $this->runModuleCommand(
            filename: 'const.15.wasm',
            name: null,
            line: 46,
        );
    }

    #[Depends('testModule15')]
    public function testModule16(): void
    {
        $this->runModuleCommand(
            filename: 'const.16.wasm',
            name: null,
            line: 47,
        );
    }

    #[Depends('testModule16')]
    public function testModule17(): void
    {
        $this->runModuleCommand(
            filename: 'const.17.wasm',
            name: null,
            line: 48,
        );
    }

    #[Depends('testModule17')]
    public function testModule18(): void
    {
        $this->runModuleCommand(
            filename: 'const.18.wasm',
            name: null,
            line: 49,
        );
    }

    #[Depends('testModule18')]
    public function testModule19(): void
    {
        $this->runModuleCommand(
            filename: 'const.19.wasm',
            name: null,
            line: 50,
        );
    }

    #[Depends('testModule19')]
    public function testModule20(): void
    {
        $this->runModuleCommand(
            filename: 'const.20.wasm',
            name: null,
            line: 51,
        );
    }

    #[Depends('testModule20')]
    public function testModule21(): void
    {
        $this->runModuleCommand(
            filename: 'const.21.wasm',
            name: null,
            line: 52,
        );
    }

    #[Depends('testModule21')]
    public function testModule22(): void
    {
        $this->runModuleCommand(
            filename: 'const.22.wasm',
            name: null,
            line: 53,
        );
    }

    #[Depends('testModule22')]
    public function testModule23(): void
    {
        $this->runModuleCommand(
            filename: 'const.23.wasm',
            name: null,
            line: 54,
        );
    }

    #[Depends('testModule23')]
    public function testModule24(): void
    {
        $this->runModuleCommand(
            filename: 'const.24.wasm',
            name: null,
            line: 55,
        );
    }

    #[Depends('testModule24')]
    public function testModule25(): void
    {
        $this->runModuleCommand(
            filename: 'const.25.wasm',
            name: null,
            line: 56,
        );
    }

    #[Depends('testModule25')]
    public function testModule26(): void
    {
        $this->runModuleCommand(
            filename: 'const.26.wasm',
            name: null,
            line: 57,
        );
    }

    #[Depends('testModule26')]
    public function testModule27(): void
    {
        $this->runModuleCommand(
            filename: 'const.27.wasm',
            name: null,
            line: 58,
        );
    }

    #[Depends('testModule27')]
    public function testModule28(): void
    {
        $this->runModuleCommand(
            filename: 'const.28.wasm',
            name: null,
            line: 59,
        );
    }

    #[Depends('testModule28')]
    public function testModule29(): void
    {
        $this->runModuleCommand(
            filename: 'const.29.wasm',
            name: null,
            line: 60,
        );
    }

    #[Depends('testModule29')]
    public function testModule30(): void
    {
        $this->runModuleCommand(
            filename: 'const.30.wasm',
            name: null,
            line: 61,
        );
    }

    #[Depends('testModule30')]
    public function testModule31(): void
    {
        $this->runModuleCommand(
            filename: 'const.31.wasm',
            name: null,
            line: 62,
        );
    }

    #[Depends('testModule31')]
    public function testModule32(): void
    {
        $this->runModuleCommand(
            filename: 'const.32.wasm',
            name: null,
            line: 63,
        );
    }

    #[Depends('testModule32')]
    public function testModule33(): void
    {
        $this->runModuleCommand(
            filename: 'const.33.wasm',
            name: null,
            line: 64,
        );
    }

    #[Depends('testModule33')]
    public function testModule34(): void
    {
        $this->runModuleCommand(
            filename: 'const.34.wasm',
            name: null,
            line: 65,
        );
    }

    #[Depends('testModule34')]
    public function testModule35(): void
    {
        $this->runModuleCommand(
            filename: 'const.35.wasm',
            name: null,
            line: 66,
        );
    }

    #[DoesNotPerformAssertions]
    #[Depends('testModule35')]
    public function testAssertMalformed36(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed36')]
    public function testAssertMalformed37(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed37')]
    public function testAssertMalformed38(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed38')]
    public function testAssertMalformed39(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed39')]
    public function testAssertMalformed40(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed40')]
    public function testAssertMalformed41(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed41')]
    public function testAssertMalformed42(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed42')]
    public function testAssertMalformed43(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed43')]
    public function testAssertMalformed44(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed44')]
    public function testAssertMalformed45(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed45')]
    public function testAssertMalformed46(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed46')]
    public function testAssertMalformed47(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed47')]
    public function testAssertMalformed48(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed48')]
    public function testAssertMalformed49(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed49')]
    public function testAssertMalformed50(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed50')]
    public function testAssertMalformed51(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed51')]
    public function testAssertMalformed52(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed52')]
    public function testAssertMalformed53(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed53')]
    public function testAssertMalformed54(): void
    {
    }

    #[Depends('testAssertMalformed54')]
    public function testModule55(): void
    {
        $this->runModuleCommand(
            filename: 'const.55.wasm',
            name: null,
            line: 145,
        );
    }

    #[Depends('testModule55')]
    public function testModule56(): void
    {
        $this->runModuleCommand(
            filename: 'const.56.wasm',
            name: null,
            line: 146,
        );
    }

    #[Depends('testModule56')]
    public function testModule57(): void
    {
        $this->runModuleCommand(
            filename: 'const.57.wasm',
            name: null,
            line: 147,
        );
    }

    #[Depends('testModule57')]
    public function testModule58(): void
    {
        $this->runModuleCommand(
            filename: 'const.58.wasm',
            name: null,
            line: 148,
        );
    }

    #[Depends('testModule58')]
    public function testModule59(): void
    {
        $this->runModuleCommand(
            filename: 'const.59.wasm',
            name: null,
            line: 149,
        );
    }

    #[Depends('testModule59')]
    public function testModule60(): void
    {
        $this->runModuleCommand(
            filename: 'const.60.wasm',
            name: null,
            line: 150,
        );
    }

    #[Depends('testModule60')]
    public function testModule61(): void
    {
        $this->runModuleCommand(
            filename: 'const.61.wasm',
            name: null,
            line: 151,
        );
    }

    #[Depends('testModule61')]
    public function testModule62(): void
    {
        $this->runModuleCommand(
            filename: 'const.62.wasm',
            name: null,
            line: 152,
        );
    }

    #[Depends('testModule62')]
    public function testModule63(): void
    {
        $this->runModuleCommand(
            filename: 'const.63.wasm',
            name: null,
            line: 153,
        );
    }

    #[Depends('testModule63')]
    public function testModule64(): void
    {
        $this->runModuleCommand(
            filename: 'const.64.wasm',
            name: null,
            line: 154,
        );
    }

    #[Depends('testModule64')]
    public function testModule65(): void
    {
        $this->runModuleCommand(
            filename: 'const.65.wasm',
            name: null,
            line: 155,
        );
    }

    #[Depends('testModule65')]
    public function testModule66(): void
    {
        $this->runModuleCommand(
            filename: 'const.66.wasm',
            name: null,
            line: 156,
        );
    }

    #[Depends('testModule66')]
    public function testModule67(): void
    {
        $this->runModuleCommand(
            filename: 'const.67.wasm',
            name: null,
            line: 157,
        );
    }

    #[Depends('testModule67')]
    public function testModule68(): void
    {
        $this->runModuleCommand(
            filename: 'const.68.wasm',
            name: null,
            line: 158,
        );
    }

    #[Depends('testModule68')]
    public function testModule69(): void
    {
        $this->runModuleCommand(
            filename: 'const.69.wasm',
            name: null,
            line: 159,
        );
    }

    #[Depends('testModule69')]
    public function testModule70(): void
    {
        $this->runModuleCommand(
            filename: 'const.70.wasm',
            name: null,
            line: 160,
        );
    }

    #[Depends('testModule70')]
    public function testModule71(): void
    {
        $this->runModuleCommand(
            filename: 'const.71.wasm',
            name: null,
            line: 161,
        );
    }

    #[Depends('testModule71')]
    public function testModule72(): void
    {
        $this->runModuleCommand(
            filename: 'const.72.wasm',
            name: null,
            line: 162,
        );
    }

    #[Depends('testModule72')]
    public function testModule73(): void
    {
        $this->runModuleCommand(
            filename: 'const.73.wasm',
            name: null,
            line: 164,
        );
    }

    #[Depends('testModule73')]
    public function testModule74(): void
    {
        $this->runModuleCommand(
            filename: 'const.74.wasm',
            name: null,
            line: 165,
        );
    }

    #[Depends('testModule74')]
    public function testModule75(): void
    {
        $this->runModuleCommand(
            filename: 'const.75.wasm',
            name: null,
            line: 166,
        );
    }

    #[Depends('testModule75')]
    public function testModule76(): void
    {
        $this->runModuleCommand(
            filename: 'const.76.wasm',
            name: null,
            line: 167,
        );
    }

    #[Depends('testModule76')]
    public function testModule77(): void
    {
        $this->runModuleCommand(
            filename: 'const.77.wasm',
            name: null,
            line: 168,
        );
    }

    #[Depends('testModule77')]
    public function testModule78(): void
    {
        $this->runModuleCommand(
            filename: 'const.78.wasm',
            name: null,
            line: 169,
        );
    }

    #[Depends('testModule78')]
    public function testModule79(): void
    {
        $this->runModuleCommand(
            filename: 'const.79.wasm',
            name: null,
            line: 170,
        );
    }

    #[Depends('testModule79')]
    public function testModule80(): void
    {
        $this->runModuleCommand(
            filename: 'const.80.wasm',
            name: null,
            line: 171,
        );
    }

    #[Depends('testModule80')]
    public function testModule81(): void
    {
        $this->runModuleCommand(
            filename: 'const.81.wasm',
            name: null,
            line: 172,
        );
    }

    #[Depends('testModule81')]
    public function testModule82(): void
    {
        $this->runModuleCommand(
            filename: 'const.82.wasm',
            name: null,
            line: 173,
        );
    }

    #[Depends('testModule82')]
    public function testModule83(): void
    {
        $this->runModuleCommand(
            filename: 'const.83.wasm',
            name: null,
            line: 174,
        );
    }

    #[Depends('testModule83')]
    public function testModule84(): void
    {
        $this->runModuleCommand(
            filename: 'const.84.wasm',
            name: null,
            line: 175,
        );
    }

    #[Depends('testModule84')]
    public function testModule85(): void
    {
        $this->runModuleCommand(
            filename: 'const.85.wasm',
            name: null,
            line: 176,
        );
    }

    #[Depends('testModule85')]
    public function testModule86(): void
    {
        $this->runModuleCommand(
            filename: 'const.86.wasm',
            name: null,
            line: 177,
        );
    }

    #[Depends('testModule86')]
    public function testModule87(): void
    {
        $this->runModuleCommand(
            filename: 'const.87.wasm',
            name: null,
            line: 178,
        );
    }

    #[Depends('testModule87')]
    public function testModule88(): void
    {
        $this->runModuleCommand(
            filename: 'const.88.wasm',
            name: null,
            line: 179,
        );
    }

    #[Depends('testModule88')]
    public function testModule89(): void
    {
        $this->runModuleCommand(
            filename: 'const.89.wasm',
            name: null,
            line: 180,
        );
    }

    #[Depends('testModule89')]
    public function testModule90(): void
    {
        $this->runModuleCommand(
            filename: 'const.90.wasm',
            name: null,
            line: 181,
        );
    }

    #[DoesNotPerformAssertions]
    #[Depends('testModule90')]
    public function testAssertMalformed91(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed91')]
    public function testAssertMalformed92(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed92')]
    public function testAssertMalformed93(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed93')]
    public function testAssertMalformed94(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed94')]
    public function testAssertMalformed95(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed95')]
    public function testAssertMalformed96(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed96')]
    public function testAssertMalformed97(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed97')]
    public function testAssertMalformed98(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed98')]
    public function testAssertMalformed99(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed99')]
    public function testAssertMalformed100(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed100')]
    public function testAssertMalformed101(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed101')]
    public function testAssertMalformed102(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed102')]
    public function testAssertMalformed103(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed103')]
    public function testAssertMalformed104(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed104')]
    public function testAssertMalformed105(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed105')]
    public function testAssertMalformed106(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed106')]
    public function testAssertMalformed107(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed107')]
    public function testAssertMalformed108(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed108')]
    public function testAssertMalformed109(): void
    {
    }

    #[Depends('testAssertMalformed109')]
    public function testModule110(): void
    {
        $this->runModuleCommand(
            filename: 'const.110.wasm',
            name: null,
            line: 264,
        );
    }

    #[Depends('testModule110')]
    public function testModule111(): void
    {
        $this->runModuleCommand(
            filename: 'const.111.wasm',
            name: null,
            line: 265,
        );
    }

    #[DoesNotPerformAssertions]
    #[Depends('testModule111')]
    public function testAssertMalformed112(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed112')]
    public function testAssertMalformed113(): void
    {
    }

    #[Depends('testAssertMalformed113')]
    public function testModule114(): void
    {
        $this->runModuleCommand(
            filename: 'const.114.wasm',
            name: null,
            line: 275,
        );
    }

    #[Depends('testModule114')]
    public function testModule115(): void
    {
        $this->runModuleCommand(
            filename: 'const.115.wasm',
            name: null,
            line: 276,
        );
    }

    #[DoesNotPerformAssertions]
    #[Depends('testModule115')]
    public function testAssertMalformed116(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed116')]
    public function testAssertMalformed117(): void
    {
    }

    #[Depends('testAssertMalformed117')]
    public function testModule118(): void
    {
        $this->runModuleCommand(
            filename: 'const.118.wasm',
            name: null,
            line: 286,
        );
    }

    #[Depends('testModule118')]
    public function testModule119(): void
    {
        $this->runModuleCommand(
            filename: 'const.119.wasm',
            name: null,
            line: 287,
        );
    }

    #[DoesNotPerformAssertions]
    #[Depends('testModule119')]
    public function testAssertMalformed120(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed120')]
    public function testAssertMalformed121(): void
    {
    }

    #[Depends('testAssertMalformed121')]
    public function testModule122(): void
    {
        $this->runModuleCommand(
            filename: 'const.122.wasm',
            name: null,
            line: 297,
        );
    }

    #[Depends('testModule122')]
    public function testModule123(): void
    {
        $this->runModuleCommand(
            filename: 'const.123.wasm',
            name: null,
            line: 298,
        );
    }

    #[DoesNotPerformAssertions]
    #[Depends('testModule123')]
    public function testAssertMalformed124(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed124')]
    public function testAssertMalformed125(): void
    {
    }

    #[Depends('testAssertMalformed125')]
    public function testModule126(): void
    {
        $this->runModuleCommand(
            filename: 'const.126.wasm',
            name: null,
            line: 308,
        );
    }

    #[Depends('testModule126')]
    public function testModule127(): void
    {
        $this->runModuleCommand(
            filename: 'const.127.wasm',
            name: null,
            line: 309,
        );
    }

    #[Depends('testModule127')]
    public function testModule128(): void
    {
        $this->runModuleCommand(
            filename: 'const.128.wasm',
            name: null,
            line: 310,
        );
    }

    #[Depends('testModule128')]
    public function testModule129(): void
    {
        $this->runModuleCommand(
            filename: 'const.129.wasm',
            name: null,
            line: 311,
        );
    }

    #[Depends('testModule129')]
    public function testModule130(): void
    {
        $this->runModuleCommand(
            filename: 'const.130.wasm',
            name: null,
            line: 312,
        );
    }

    #[Depends('testModule130')]
    public function testModule131(): void
    {
        $this->runModuleCommand(
            filename: 'const.131.wasm',
            name: null,
            line: 313,
        );
    }

    #[Depends('testModule131')]
    public function testModule132(): void
    {
        $this->runModuleCommand(
            filename: 'const.132.wasm',
            name: null,
            line: 314,
        );
    }

    #[Depends('testModule132')]
    public function testModule133(): void
    {
        $this->runModuleCommand(
            filename: 'const.133.wasm',
            name: null,
            line: 315,
        );
    }

    #[Depends('testModule133')]
    public function testModule134(): void
    {
        $this->runModuleCommand(
            filename: 'const.134.wasm',
            name: null,
            line: 316,
        );
    }

    #[Depends('testModule134')]
    public function testModule135(): void
    {
        $this->runModuleCommand(
            filename: 'const.135.wasm',
            name: null,
            line: 317,
        );
    }

    #[DoesNotPerformAssertions]
    #[Depends('testModule135')]
    public function testAssertMalformed136(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed136')]
    public function testAssertMalformed137(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed137')]
    public function testAssertMalformed138(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed138')]
    public function testAssertMalformed139(): void
    {
    }

    #[Depends('testAssertMalformed139')]
    public function testModule140(): void
    {
        $this->runModuleCommand(
            filename: 'const.140.wasm',
            name: null,
            line: 335,
        );
    }

    #[Depends('testModule140')]
    public function testModule141(): void
    {
        $this->runModuleCommand(
            filename: 'const.141.wasm',
            name: null,
            line: 336,
        );
    }

    #[DoesNotPerformAssertions]
    #[Depends('testModule141')]
    public function testAssertMalformed142(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed142')]
    public function testAssertMalformed143(): void
    {
    }

    #[Depends('testAssertMalformed143')]
    public function testModule144(): void
    {
        $this->runModuleCommand(
            filename: 'const.144.wasm',
            name: null,
            line: 346,
        );
    }

    #[Depends('testModule144')]
    public function testModule145(): void
    {
        $this->runModuleCommand(
            filename: 'const.145.wasm',
            name: null,
            line: 347,
        );
    }

    #[DoesNotPerformAssertions]
    #[Depends('testModule145')]
    public function testAssertMalformed146(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed146')]
    public function testAssertMalformed147(): void
    {
    }

    #[Depends('testAssertMalformed147')]
    public function testModule148(): void
    {
        $this->runModuleCommand(
            filename: 'const.148.wasm',
            name: null,
            line: 357,
        );
    }

    #[Depends('testModule148')]
    public function testModule149(): void
    {
        $this->runModuleCommand(
            filename: 'const.149.wasm',
            name: null,
            line: 358,
        );
    }

    #[Depends('testModule149')]
    public function testModule150(): void
    {
        $this->runModuleCommand(
            filename: 'const.150.wasm',
            name: null,
            line: 359,
        );
    }

    #[Depends('testModule150')]
    public function testModule151(): void
    {
        $this->runModuleCommand(
            filename: 'const.151.wasm',
            name: null,
            line: 360,
        );
    }

    #[Depends('testModule151')]
    public function testModule152(): void
    {
        $this->runModuleCommand(
            filename: 'const.152.wasm',
            name: null,
            line: 361,
        );
    }

    #[Depends('testModule152')]
    public function testModule153(): void
    {
        $this->runModuleCommand(
            filename: 'const.153.wasm',
            name: null,
            line: 362,
        );
    }

    #[Depends('testModule153')]
    public function testModule154(): void
    {
        $this->runModuleCommand(
            filename: 'const.154.wasm',
            name: null,
            line: 363,
        );
    }

    #[Depends('testModule154')]
    public function testModule155(): void
    {
        $this->runModuleCommand(
            filename: 'const.155.wasm',
            name: null,
            line: 364,
        );
    }

    #[DoesNotPerformAssertions]
    #[Depends('testModule155')]
    public function testAssertMalformed156(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed156')]
    public function testAssertMalformed157(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed157')]
    public function testAssertMalformed158(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed158')]
    public function testAssertMalformed159(): void
    {
    }

    #[Depends('testAssertMalformed159')]
    public function testModule160(): void
    {
        $this->runModuleCommand(
            filename: 'const.160.wasm',
            name: null,
            line: 382,
        );
    }

    #[Depends('testModule160')]
    public function testModule161(): void
    {
        $this->runModuleCommand(
            filename: 'const.161.wasm',
            name: null,
            line: 383,
        );
    }

    #[DoesNotPerformAssertions]
    #[Depends('testModule161')]
    public function testAssertMalformed162(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed162')]
    public function testAssertMalformed163(): void
    {
    }

    #[Depends('testAssertMalformed163')]
    public function testModule164(): void
    {
        $this->runModuleCommand(
            filename: 'const.164.wasm',
            name: null,
            line: 393,
        );
    }

    #[Depends('testModule164')]
    public function testModule165(): void
    {
        $this->runModuleCommand(
            filename: 'const.165.wasm',
            name: null,
            line: 394,
        );
    }

    #[DoesNotPerformAssertions]
    #[Depends('testModule165')]
    public function testAssertMalformed166(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed166')]
    public function testAssertMalformed167(): void
    {
    }

    #[Depends('testAssertMalformed167')]
    public function testModule168(): void
    {
        $this->runModuleCommand(
            filename: 'const.168.wasm',
            name: null,
            line: 404,
        );
    }

    #[Depends('testModule168')]
    public function testModule169(): void
    {
        $this->runModuleCommand(
            filename: 'const.169.wasm',
            name: null,
            line: 405,
        );
    }

    #[Depends('testModule169')]
    public function testModule170(): void
    {
        $this->runModuleCommand(
            filename: 'const.170.wasm',
            name: null,
            line: 406,
        );
    }

    #[Depends('testModule170')]
    public function testModule171(): void
    {
        $this->runModuleCommand(
            filename: 'const.171.wasm',
            name: null,
            line: 407,
        );
    }

    #[DoesNotPerformAssertions]
    #[Depends('testModule171')]
    public function testAssertMalformed172(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed172')]
    public function testAssertMalformed173(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed173')]
    public function testAssertMalformed174(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed174')]
    public function testAssertMalformed175(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed175')]
    public function testAssertMalformed176(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed176')]
    public function testAssertMalformed177(): void
    {
    }

    #[Depends('testAssertMalformed177')]
    public function testModule178(): void
    {
        $this->runModuleCommand(
            filename: 'const.178.wasm',
            name: null,
            line: 440,
        );
    }

    #[Depends('testModule178')]
    public function testAssertReturn179(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '645922816']],
            line: 441,
        );
    }

    #[Depends('testAssertReturn179')]
    public function testModule180(): void
    {
        $this->runModuleCommand(
            filename: 'const.179.wasm',
            name: null,
            line: 442,
        );
    }

    #[Depends('testModule180')]
    public function testAssertReturn181(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2793406464']],
            line: 443,
        );
    }

    #[Depends('testAssertReturn181')]
    public function testModule182(): void
    {
        $this->runModuleCommand(
            filename: 'const.180.wasm',
            name: null,
            line: 444,
        );
    }

    #[Depends('testModule182')]
    public function testAssertReturn183(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '645922817']],
            line: 445,
        );
    }

    #[Depends('testAssertReturn183')]
    public function testModule184(): void
    {
        $this->runModuleCommand(
            filename: 'const.181.wasm',
            name: null,
            line: 446,
        );
    }

    #[Depends('testModule184')]
    public function testAssertReturn185(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2793406465']],
            line: 447,
        );
    }

    #[Depends('testAssertReturn185')]
    public function testModule186(): void
    {
        $this->runModuleCommand(
            filename: 'const.182.wasm',
            name: null,
            line: 448,
        );
    }

    #[Depends('testModule186')]
    public function testAssertReturn187(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '645922817']],
            line: 449,
        );
    }

    #[Depends('testAssertReturn187')]
    public function testModule188(): void
    {
        $this->runModuleCommand(
            filename: 'const.183.wasm',
            name: null,
            line: 450,
        );
    }

    #[Depends('testModule188')]
    public function testAssertReturn189(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2793406465']],
            line: 451,
        );
    }

    #[Depends('testAssertReturn189')]
    public function testModule190(): void
    {
        $this->runModuleCommand(
            filename: 'const.184.wasm',
            name: null,
            line: 452,
        );
    }

    #[Depends('testModule190')]
    public function testAssertReturn191(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '645922817']],
            line: 453,
        );
    }

    #[Depends('testAssertReturn191')]
    public function testModule192(): void
    {
        $this->runModuleCommand(
            filename: 'const.185.wasm',
            name: null,
            line: 454,
        );
    }

    #[Depends('testModule192')]
    public function testAssertReturn193(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2793406465']],
            line: 455,
        );
    }

    #[Depends('testAssertReturn193')]
    public function testModule194(): void
    {
        $this->runModuleCommand(
            filename: 'const.186.wasm',
            name: null,
            line: 456,
        );
    }

    #[Depends('testModule194')]
    public function testAssertReturn195(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '645922817']],
            line: 457,
        );
    }

    #[Depends('testAssertReturn195')]
    public function testModule196(): void
    {
        $this->runModuleCommand(
            filename: 'const.187.wasm',
            name: null,
            line: 458,
        );
    }

    #[Depends('testModule196')]
    public function testAssertReturn197(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2793406465']],
            line: 459,
        );
    }

    #[Depends('testAssertReturn197')]
    public function testModule198(): void
    {
        $this->runModuleCommand(
            filename: 'const.188.wasm',
            name: null,
            line: 460,
        );
    }

    #[Depends('testModule198')]
    public function testAssertReturn199(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '645922817']],
            line: 461,
        );
    }

    #[Depends('testAssertReturn199')]
    public function testModule200(): void
    {
        $this->runModuleCommand(
            filename: 'const.189.wasm',
            name: null,
            line: 462,
        );
    }

    #[Depends('testModule200')]
    public function testAssertReturn201(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2793406465']],
            line: 463,
        );
    }

    #[Depends('testAssertReturn201')]
    public function testModule202(): void
    {
        $this->runModuleCommand(
            filename: 'const.190.wasm',
            name: null,
            line: 464,
        );
    }

    #[Depends('testModule202')]
    public function testAssertReturn203(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '645922818']],
            line: 465,
        );
    }

    #[Depends('testAssertReturn203')]
    public function testModule204(): void
    {
        $this->runModuleCommand(
            filename: 'const.191.wasm',
            name: null,
            line: 466,
        );
    }

    #[Depends('testModule204')]
    public function testAssertReturn205(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2793406466']],
            line: 467,
        );
    }

    #[Depends('testAssertReturn205')]
    public function testModule206(): void
    {
        $this->runModuleCommand(
            filename: 'const.192.wasm',
            name: null,
            line: 468,
        );
    }

    #[Depends('testModule206')]
    public function testAssertReturn207(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '645922818']],
            line: 469,
        );
    }

    #[Depends('testAssertReturn207')]
    public function testModule208(): void
    {
        $this->runModuleCommand(
            filename: 'const.193.wasm',
            name: null,
            line: 470,
        );
    }

    #[Depends('testModule208')]
    public function testAssertReturn209(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2793406466']],
            line: 471,
        );
    }

    #[Depends('testAssertReturn209')]
    public function testModule210(): void
    {
        $this->runModuleCommand(
            filename: 'const.194.wasm',
            name: null,
            line: 472,
        );
    }

    #[Depends('testModule210')]
    public function testAssertReturn211(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '645922818']],
            line: 473,
        );
    }

    #[Depends('testAssertReturn211')]
    public function testModule212(): void
    {
        $this->runModuleCommand(
            filename: 'const.195.wasm',
            name: null,
            line: 474,
        );
    }

    #[Depends('testModule212')]
    public function testAssertReturn213(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2793406466']],
            line: 475,
        );
    }

    #[Depends('testAssertReturn213')]
    public function testModule214(): void
    {
        $this->runModuleCommand(
            filename: 'const.196.wasm',
            name: null,
            line: 476,
        );
    }

    #[Depends('testModule214')]
    public function testAssertReturn215(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '645922818']],
            line: 477,
        );
    }

    #[Depends('testAssertReturn215')]
    public function testModule216(): void
    {
        $this->runModuleCommand(
            filename: 'const.197.wasm',
            name: null,
            line: 478,
        );
    }

    #[Depends('testModule216')]
    public function testAssertReturn217(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2793406466']],
            line: 479,
        );
    }

    #[Depends('testAssertReturn217')]
    public function testModule218(): void
    {
        $this->runModuleCommand(
            filename: 'const.198.wasm',
            name: null,
            line: 480,
        );
    }

    #[Depends('testModule218')]
    public function testAssertReturn219(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '645922818']],
            line: 481,
        );
    }

    #[Depends('testAssertReturn219')]
    public function testModule220(): void
    {
        $this->runModuleCommand(
            filename: 'const.199.wasm',
            name: null,
            line: 482,
        );
    }

    #[Depends('testModule220')]
    public function testAssertReturn221(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2793406466']],
            line: 483,
        );
    }

    #[Depends('testAssertReturn221')]
    public function testModule222(): void
    {
        $this->runModuleCommand(
            filename: 'const.200.wasm',
            name: null,
            line: 484,
        );
    }

    #[Depends('testModule222')]
    public function testAssertReturn223(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '645922818']],
            line: 485,
        );
    }

    #[Depends('testAssertReturn223')]
    public function testModule224(): void
    {
        $this->runModuleCommand(
            filename: 'const.201.wasm',
            name: null,
            line: 486,
        );
    }

    #[Depends('testModule224')]
    public function testAssertReturn225(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2793406466']],
            line: 487,
        );
    }

    #[Depends('testAssertReturn225')]
    public function testModule226(): void
    {
        $this->runModuleCommand(
            filename: 'const.202.wasm',
            name: null,
            line: 488,
        );
    }

    #[Depends('testModule226')]
    public function testAssertReturn227(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '645922818']],
            line: 489,
        );
    }

    #[Depends('testAssertReturn227')]
    public function testModule228(): void
    {
        $this->runModuleCommand(
            filename: 'const.203.wasm',
            name: null,
            line: 490,
        );
    }

    #[Depends('testModule228')]
    public function testAssertReturn229(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2793406466']],
            line: 491,
        );
    }

    #[Depends('testAssertReturn229')]
    public function testModule230(): void
    {
        $this->runModuleCommand(
            filename: 'const.204.wasm',
            name: null,
            line: 492,
        );
    }

    #[Depends('testModule230')]
    public function testAssertReturn231(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '645922819']],
            line: 493,
        );
    }

    #[Depends('testAssertReturn231')]
    public function testModule232(): void
    {
        $this->runModuleCommand(
            filename: 'const.205.wasm',
            name: null,
            line: 494,
        );
    }

    #[Depends('testModule232')]
    public function testAssertReturn233(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2793406467']],
            line: 495,
        );
    }

    #[Depends('testAssertReturn233')]
    public function testModule234(): void
    {
        $this->runModuleCommand(
            filename: 'const.206.wasm',
            name: null,
            line: 497,
        );
    }

    #[Depends('testModule234')]
    public function testAssertReturn235(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '645922816']],
            line: 498,
        );
    }

    #[Depends('testAssertReturn235')]
    public function testModule236(): void
    {
        $this->runModuleCommand(
            filename: 'const.207.wasm',
            name: null,
            line: 499,
        );
    }

    #[Depends('testModule236')]
    public function testAssertReturn237(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2793406464']],
            line: 500,
        );
    }

    #[Depends('testAssertReturn237')]
    public function testModule238(): void
    {
        $this->runModuleCommand(
            filename: 'const.208.wasm',
            name: null,
            line: 501,
        );
    }

    #[Depends('testModule238')]
    public function testAssertReturn239(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '645922817']],
            line: 502,
        );
    }

    #[Depends('testAssertReturn239')]
    public function testModule240(): void
    {
        $this->runModuleCommand(
            filename: 'const.209.wasm',
            name: null,
            line: 503,
        );
    }

    #[Depends('testModule240')]
    public function testAssertReturn241(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2793406465']],
            line: 504,
        );
    }

    #[Depends('testAssertReturn241')]
    public function testModule242(): void
    {
        $this->runModuleCommand(
            filename: 'const.210.wasm',
            name: null,
            line: 505,
        );
    }

    #[Depends('testModule242')]
    public function testAssertReturn243(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '645922817']],
            line: 506,
        );
    }

    #[Depends('testAssertReturn243')]
    public function testModule244(): void
    {
        $this->runModuleCommand(
            filename: 'const.211.wasm',
            name: null,
            line: 507,
        );
    }

    #[Depends('testModule244')]
    public function testAssertReturn245(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2793406465']],
            line: 508,
        );
    }

    #[Depends('testAssertReturn245')]
    public function testModule246(): void
    {
        $this->runModuleCommand(
            filename: 'const.212.wasm',
            name: null,
            line: 509,
        );
    }

    #[Depends('testModule246')]
    public function testAssertReturn247(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '645922817']],
            line: 510,
        );
    }

    #[Depends('testAssertReturn247')]
    public function testModule248(): void
    {
        $this->runModuleCommand(
            filename: 'const.213.wasm',
            name: null,
            line: 511,
        );
    }

    #[Depends('testModule248')]
    public function testAssertReturn249(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2793406465']],
            line: 512,
        );
    }

    #[Depends('testAssertReturn249')]
    public function testModule250(): void
    {
        $this->runModuleCommand(
            filename: 'const.214.wasm',
            name: null,
            line: 513,
        );
    }

    #[Depends('testModule250')]
    public function testAssertReturn251(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '645922817']],
            line: 514,
        );
    }

    #[Depends('testAssertReturn251')]
    public function testModule252(): void
    {
        $this->runModuleCommand(
            filename: 'const.215.wasm',
            name: null,
            line: 515,
        );
    }

    #[Depends('testModule252')]
    public function testAssertReturn253(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2793406465']],
            line: 516,
        );
    }

    #[Depends('testAssertReturn253')]
    public function testModule254(): void
    {
        $this->runModuleCommand(
            filename: 'const.216.wasm',
            name: null,
            line: 517,
        );
    }

    #[Depends('testModule254')]
    public function testAssertReturn255(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '645922817']],
            line: 518,
        );
    }

    #[Depends('testAssertReturn255')]
    public function testModule256(): void
    {
        $this->runModuleCommand(
            filename: 'const.217.wasm',
            name: null,
            line: 519,
        );
    }

    #[Depends('testModule256')]
    public function testAssertReturn257(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2793406465']],
            line: 520,
        );
    }

    #[Depends('testAssertReturn257')]
    public function testModule258(): void
    {
        $this->runModuleCommand(
            filename: 'const.218.wasm',
            name: null,
            line: 521,
        );
    }

    #[Depends('testModule258')]
    public function testAssertReturn259(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '645922818']],
            line: 522,
        );
    }

    #[Depends('testAssertReturn259')]
    public function testModule260(): void
    {
        $this->runModuleCommand(
            filename: 'const.219.wasm',
            name: null,
            line: 523,
        );
    }

    #[Depends('testModule260')]
    public function testAssertReturn261(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2793406466']],
            line: 524,
        );
    }

    #[Depends('testAssertReturn261')]
    public function testModule262(): void
    {
        $this->runModuleCommand(
            filename: 'const.220.wasm',
            name: null,
            line: 525,
        );
    }

    #[Depends('testModule262')]
    public function testAssertReturn263(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '645922818']],
            line: 526,
        );
    }

    #[Depends('testAssertReturn263')]
    public function testModule264(): void
    {
        $this->runModuleCommand(
            filename: 'const.221.wasm',
            name: null,
            line: 527,
        );
    }

    #[Depends('testModule264')]
    public function testAssertReturn265(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2793406466']],
            line: 528,
        );
    }

    #[Depends('testAssertReturn265')]
    public function testModule266(): void
    {
        $this->runModuleCommand(
            filename: 'const.222.wasm',
            name: null,
            line: 529,
        );
    }

    #[Depends('testModule266')]
    public function testAssertReturn267(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '645922818']],
            line: 530,
        );
    }

    #[Depends('testAssertReturn267')]
    public function testModule268(): void
    {
        $this->runModuleCommand(
            filename: 'const.223.wasm',
            name: null,
            line: 531,
        );
    }

    #[Depends('testModule268')]
    public function testAssertReturn269(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2793406466']],
            line: 532,
        );
    }

    #[Depends('testAssertReturn269')]
    public function testModule270(): void
    {
        $this->runModuleCommand(
            filename: 'const.224.wasm',
            name: null,
            line: 533,
        );
    }

    #[Depends('testModule270')]
    public function testAssertReturn271(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '645922818']],
            line: 534,
        );
    }

    #[Depends('testAssertReturn271')]
    public function testModule272(): void
    {
        $this->runModuleCommand(
            filename: 'const.225.wasm',
            name: null,
            line: 535,
        );
    }

    #[Depends('testModule272')]
    public function testAssertReturn273(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2793406466']],
            line: 536,
        );
    }

    #[Depends('testAssertReturn273')]
    public function testModule274(): void
    {
        $this->runModuleCommand(
            filename: 'const.226.wasm',
            name: null,
            line: 537,
        );
    }

    #[Depends('testModule274')]
    public function testAssertReturn275(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '645922818']],
            line: 538,
        );
    }

    #[Depends('testAssertReturn275')]
    public function testModule276(): void
    {
        $this->runModuleCommand(
            filename: 'const.227.wasm',
            name: null,
            line: 539,
        );
    }

    #[Depends('testModule276')]
    public function testAssertReturn277(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2793406466']],
            line: 540,
        );
    }

    #[Depends('testAssertReturn277')]
    public function testModule278(): void
    {
        $this->runModuleCommand(
            filename: 'const.228.wasm',
            name: null,
            line: 541,
        );
    }

    #[Depends('testModule278')]
    public function testAssertReturn279(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '645922819']],
            line: 542,
        );
    }

    #[Depends('testAssertReturn279')]
    public function testModule280(): void
    {
        $this->runModuleCommand(
            filename: 'const.229.wasm',
            name: null,
            line: 543,
        );
    }

    #[Depends('testModule280')]
    public function testAssertReturn281(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2793406467']],
            line: 544,
        );
    }

    #[Depends('testAssertReturn281')]
    public function testModule282(): void
    {
        $this->runModuleCommand(
            filename: 'const.230.wasm',
            name: null,
            line: 546,
        );
    }

    #[Depends('testModule282')]
    public function testAssertReturn283(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '645922816']],
            line: 547,
        );
    }

    #[Depends('testAssertReturn283')]
    public function testModule284(): void
    {
        $this->runModuleCommand(
            filename: 'const.231.wasm',
            name: null,
            line: 548,
        );
    }

    #[Depends('testModule284')]
    public function testAssertReturn285(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2793406464']],
            line: 549,
        );
    }

    #[Depends('testAssertReturn285')]
    public function testModule286(): void
    {
        $this->runModuleCommand(
            filename: 'const.232.wasm',
            name: null,
            line: 550,
        );
    }

    #[Depends('testModule286')]
    public function testAssertReturn287(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '645922817']],
            line: 551,
        );
    }

    #[Depends('testAssertReturn287')]
    public function testModule288(): void
    {
        $this->runModuleCommand(
            filename: 'const.233.wasm',
            name: null,
            line: 552,
        );
    }

    #[Depends('testModule288')]
    public function testAssertReturn289(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2793406465']],
            line: 553,
        );
    }

    #[Depends('testAssertReturn289')]
    public function testModule290(): void
    {
        $this->runModuleCommand(
            filename: 'const.234.wasm',
            name: null,
            line: 554,
        );
    }

    #[Depends('testModule290')]
    public function testAssertReturn291(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '645922817']],
            line: 555,
        );
    }

    #[Depends('testAssertReturn291')]
    public function testModule292(): void
    {
        $this->runModuleCommand(
            filename: 'const.235.wasm',
            name: null,
            line: 556,
        );
    }

    #[Depends('testModule292')]
    public function testAssertReturn293(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2793406465']],
            line: 557,
        );
    }

    #[Depends('testAssertReturn293')]
    public function testModule294(): void
    {
        $this->runModuleCommand(
            filename: 'const.236.wasm',
            name: null,
            line: 558,
        );
    }

    #[Depends('testModule294')]
    public function testAssertReturn295(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '645922818']],
            line: 559,
        );
    }

    #[Depends('testAssertReturn295')]
    public function testModule296(): void
    {
        $this->runModuleCommand(
            filename: 'const.237.wasm',
            name: null,
            line: 560,
        );
    }

    #[Depends('testModule296')]
    public function testAssertReturn297(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2793406466']],
            line: 561,
        );
    }

    #[Depends('testAssertReturn297')]
    public function testModule298(): void
    {
        $this->runModuleCommand(
            filename: 'const.238.wasm',
            name: null,
            line: 564,
        );
    }

    #[Depends('testModule298')]
    public function testAssertReturn299(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1484783616']],
            line: 565,
        );
    }

    #[Depends('testAssertReturn299')]
    public function testModule300(): void
    {
        $this->runModuleCommand(
            filename: 'const.239.wasm',
            name: null,
            line: 566,
        );
    }

    #[Depends('testModule300')]
    public function testAssertReturn301(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '3632267264']],
            line: 567,
        );
    }

    #[Depends('testAssertReturn301')]
    public function testModule302(): void
    {
        $this->runModuleCommand(
            filename: 'const.240.wasm',
            name: null,
            line: 568,
        );
    }

    #[Depends('testModule302')]
    public function testAssertReturn303(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1484783617']],
            line: 569,
        );
    }

    #[Depends('testAssertReturn303')]
    public function testModule304(): void
    {
        $this->runModuleCommand(
            filename: 'const.241.wasm',
            name: null,
            line: 570,
        );
    }

    #[Depends('testModule304')]
    public function testAssertReturn305(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '3632267265']],
            line: 571,
        );
    }

    #[Depends('testAssertReturn305')]
    public function testModule306(): void
    {
        $this->runModuleCommand(
            filename: 'const.242.wasm',
            name: null,
            line: 572,
        );
    }

    #[Depends('testModule306')]
    public function testAssertReturn307(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1484783617']],
            line: 573,
        );
    }

    #[Depends('testAssertReturn307')]
    public function testModule308(): void
    {
        $this->runModuleCommand(
            filename: 'const.243.wasm',
            name: null,
            line: 574,
        );
    }

    #[Depends('testModule308')]
    public function testAssertReturn309(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '3632267265']],
            line: 575,
        );
    }

    #[Depends('testAssertReturn309')]
    public function testModule310(): void
    {
        $this->runModuleCommand(
            filename: 'const.244.wasm',
            name: null,
            line: 576,
        );
    }

    #[Depends('testModule310')]
    public function testAssertReturn311(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1484783617']],
            line: 577,
        );
    }

    #[Depends('testAssertReturn311')]
    public function testModule312(): void
    {
        $this->runModuleCommand(
            filename: 'const.245.wasm',
            name: null,
            line: 578,
        );
    }

    #[Depends('testModule312')]
    public function testAssertReturn313(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '3632267265']],
            line: 579,
        );
    }

    #[Depends('testAssertReturn313')]
    public function testModule314(): void
    {
        $this->runModuleCommand(
            filename: 'const.246.wasm',
            name: null,
            line: 580,
        );
    }

    #[Depends('testModule314')]
    public function testAssertReturn315(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1484783617']],
            line: 581,
        );
    }

    #[Depends('testAssertReturn315')]
    public function testModule316(): void
    {
        $this->runModuleCommand(
            filename: 'const.247.wasm',
            name: null,
            line: 582,
        );
    }

    #[Depends('testModule316')]
    public function testAssertReturn317(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '3632267265']],
            line: 583,
        );
    }

    #[Depends('testAssertReturn317')]
    public function testModule318(): void
    {
        $this->runModuleCommand(
            filename: 'const.248.wasm',
            name: null,
            line: 584,
        );
    }

    #[Depends('testModule318')]
    public function testAssertReturn319(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1484783617']],
            line: 585,
        );
    }

    #[Depends('testAssertReturn319')]
    public function testModule320(): void
    {
        $this->runModuleCommand(
            filename: 'const.249.wasm',
            name: null,
            line: 586,
        );
    }

    #[Depends('testModule320')]
    public function testAssertReturn321(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '3632267265']],
            line: 587,
        );
    }

    #[Depends('testAssertReturn321')]
    public function testModule322(): void
    {
        $this->runModuleCommand(
            filename: 'const.250.wasm',
            name: null,
            line: 588,
        );
    }

    #[Depends('testModule322')]
    public function testAssertReturn323(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1484783618']],
            line: 589,
        );
    }

    #[Depends('testAssertReturn323')]
    public function testModule324(): void
    {
        $this->runModuleCommand(
            filename: 'const.251.wasm',
            name: null,
            line: 590,
        );
    }

    #[Depends('testModule324')]
    public function testAssertReturn325(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '3632267266']],
            line: 591,
        );
    }

    #[Depends('testAssertReturn325')]
    public function testModule326(): void
    {
        $this->runModuleCommand(
            filename: 'const.252.wasm',
            name: null,
            line: 592,
        );
    }

    #[Depends('testModule326')]
    public function testAssertReturn327(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1484783618']],
            line: 593,
        );
    }

    #[Depends('testAssertReturn327')]
    public function testModule328(): void
    {
        $this->runModuleCommand(
            filename: 'const.253.wasm',
            name: null,
            line: 594,
        );
    }

    #[Depends('testModule328')]
    public function testAssertReturn329(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '3632267266']],
            line: 595,
        );
    }

    #[Depends('testAssertReturn329')]
    public function testModule330(): void
    {
        $this->runModuleCommand(
            filename: 'const.254.wasm',
            name: null,
            line: 596,
        );
    }

    #[Depends('testModule330')]
    public function testAssertReturn331(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1484783618']],
            line: 597,
        );
    }

    #[Depends('testAssertReturn331')]
    public function testModule332(): void
    {
        $this->runModuleCommand(
            filename: 'const.255.wasm',
            name: null,
            line: 598,
        );
    }

    #[Depends('testModule332')]
    public function testAssertReturn333(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '3632267266']],
            line: 599,
        );
    }

    #[Depends('testAssertReturn333')]
    public function testModule334(): void
    {
        $this->runModuleCommand(
            filename: 'const.256.wasm',
            name: null,
            line: 600,
        );
    }

    #[Depends('testModule334')]
    public function testAssertReturn335(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1484783618']],
            line: 601,
        );
    }

    #[Depends('testAssertReturn335')]
    public function testModule336(): void
    {
        $this->runModuleCommand(
            filename: 'const.257.wasm',
            name: null,
            line: 602,
        );
    }

    #[Depends('testModule336')]
    public function testAssertReturn337(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '3632267266']],
            line: 603,
        );
    }

    #[Depends('testAssertReturn337')]
    public function testModule338(): void
    {
        $this->runModuleCommand(
            filename: 'const.258.wasm',
            name: null,
            line: 604,
        );
    }

    #[Depends('testModule338')]
    public function testAssertReturn339(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1484783618']],
            line: 605,
        );
    }

    #[Depends('testAssertReturn339')]
    public function testModule340(): void
    {
        $this->runModuleCommand(
            filename: 'const.259.wasm',
            name: null,
            line: 606,
        );
    }

    #[Depends('testModule340')]
    public function testAssertReturn341(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '3632267266']],
            line: 607,
        );
    }

    #[Depends('testAssertReturn341')]
    public function testModule342(): void
    {
        $this->runModuleCommand(
            filename: 'const.260.wasm',
            name: null,
            line: 608,
        );
    }

    #[Depends('testModule342')]
    public function testAssertReturn343(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1484783618']],
            line: 609,
        );
    }

    #[Depends('testAssertReturn343')]
    public function testModule344(): void
    {
        $this->runModuleCommand(
            filename: 'const.261.wasm',
            name: null,
            line: 610,
        );
    }

    #[Depends('testModule344')]
    public function testAssertReturn345(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '3632267266']],
            line: 611,
        );
    }

    #[Depends('testAssertReturn345')]
    public function testModule346(): void
    {
        $this->runModuleCommand(
            filename: 'const.262.wasm',
            name: null,
            line: 612,
        );
    }

    #[Depends('testModule346')]
    public function testAssertReturn347(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1484783618']],
            line: 613,
        );
    }

    #[Depends('testAssertReturn347')]
    public function testModule348(): void
    {
        $this->runModuleCommand(
            filename: 'const.263.wasm',
            name: null,
            line: 614,
        );
    }

    #[Depends('testModule348')]
    public function testAssertReturn349(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '3632267266']],
            line: 615,
        );
    }

    #[Depends('testAssertReturn349')]
    public function testModule350(): void
    {
        $this->runModuleCommand(
            filename: 'const.264.wasm',
            name: null,
            line: 616,
        );
    }

    #[Depends('testModule350')]
    public function testAssertReturn351(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1484783619']],
            line: 617,
        );
    }

    #[Depends('testAssertReturn351')]
    public function testModule352(): void
    {
        $this->runModuleCommand(
            filename: 'const.265.wasm',
            name: null,
            line: 618,
        );
    }

    #[Depends('testModule352')]
    public function testAssertReturn353(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '3632267267']],
            line: 619,
        );
    }

    #[Depends('testAssertReturn353')]
    public function testModule354(): void
    {
        $this->runModuleCommand(
            filename: 'const.266.wasm',
            name: null,
            line: 621,
        );
    }

    #[Depends('testModule354')]
    public function testAssertReturn355(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1484783616']],
            line: 622,
        );
    }

    #[Depends('testAssertReturn355')]
    public function testModule356(): void
    {
        $this->runModuleCommand(
            filename: 'const.267.wasm',
            name: null,
            line: 623,
        );
    }

    #[Depends('testModule356')]
    public function testAssertReturn357(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '3632267264']],
            line: 624,
        );
    }

    #[Depends('testAssertReturn357')]
    public function testModule358(): void
    {
        $this->runModuleCommand(
            filename: 'const.268.wasm',
            name: null,
            line: 625,
        );
    }

    #[Depends('testModule358')]
    public function testAssertReturn359(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1484783617']],
            line: 626,
        );
    }

    #[Depends('testAssertReturn359')]
    public function testModule360(): void
    {
        $this->runModuleCommand(
            filename: 'const.269.wasm',
            name: null,
            line: 627,
        );
    }

    #[Depends('testModule360')]
    public function testAssertReturn361(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '3632267265']],
            line: 628,
        );
    }

    #[Depends('testAssertReturn361')]
    public function testModule362(): void
    {
        $this->runModuleCommand(
            filename: 'const.270.wasm',
            name: null,
            line: 629,
        );
    }

    #[Depends('testModule362')]
    public function testAssertReturn363(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1484783617']],
            line: 630,
        );
    }

    #[Depends('testAssertReturn363')]
    public function testModule364(): void
    {
        $this->runModuleCommand(
            filename: 'const.271.wasm',
            name: null,
            line: 631,
        );
    }

    #[Depends('testModule364')]
    public function testAssertReturn365(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '3632267265']],
            line: 632,
        );
    }

    #[Depends('testAssertReturn365')]
    public function testModule366(): void
    {
        $this->runModuleCommand(
            filename: 'const.272.wasm',
            name: null,
            line: 633,
        );
    }

    #[Depends('testModule366')]
    public function testAssertReturn367(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1484783617']],
            line: 634,
        );
    }

    #[Depends('testAssertReturn367')]
    public function testModule368(): void
    {
        $this->runModuleCommand(
            filename: 'const.273.wasm',
            name: null,
            line: 635,
        );
    }

    #[Depends('testModule368')]
    public function testAssertReturn369(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '3632267265']],
            line: 636,
        );
    }

    #[Depends('testAssertReturn369')]
    public function testModule370(): void
    {
        $this->runModuleCommand(
            filename: 'const.274.wasm',
            name: null,
            line: 637,
        );
    }

    #[Depends('testModule370')]
    public function testAssertReturn371(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1484783617']],
            line: 638,
        );
    }

    #[Depends('testAssertReturn371')]
    public function testModule372(): void
    {
        $this->runModuleCommand(
            filename: 'const.275.wasm',
            name: null,
            line: 639,
        );
    }

    #[Depends('testModule372')]
    public function testAssertReturn373(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '3632267265']],
            line: 640,
        );
    }

    #[Depends('testAssertReturn373')]
    public function testModule374(): void
    {
        $this->runModuleCommand(
            filename: 'const.276.wasm',
            name: null,
            line: 641,
        );
    }

    #[Depends('testModule374')]
    public function testAssertReturn375(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1484783617']],
            line: 642,
        );
    }

    #[Depends('testAssertReturn375')]
    public function testModule376(): void
    {
        $this->runModuleCommand(
            filename: 'const.277.wasm',
            name: null,
            line: 643,
        );
    }

    #[Depends('testModule376')]
    public function testAssertReturn377(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '3632267265']],
            line: 644,
        );
    }

    #[Depends('testAssertReturn377')]
    public function testModule378(): void
    {
        $this->runModuleCommand(
            filename: 'const.278.wasm',
            name: null,
            line: 645,
        );
    }

    #[Depends('testModule378')]
    public function testAssertReturn379(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1484783618']],
            line: 646,
        );
    }

    #[Depends('testAssertReturn379')]
    public function testModule380(): void
    {
        $this->runModuleCommand(
            filename: 'const.279.wasm',
            name: null,
            line: 647,
        );
    }

    #[Depends('testModule380')]
    public function testAssertReturn381(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '3632267266']],
            line: 648,
        );
    }

    #[Depends('testAssertReturn381')]
    public function testModule382(): void
    {
        $this->runModuleCommand(
            filename: 'const.280.wasm',
            name: null,
            line: 650,
        );
    }

    #[Depends('testModule382')]
    public function testAssertReturn383(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1484783616']],
            line: 651,
        );
    }

    #[Depends('testAssertReturn383')]
    public function testModule384(): void
    {
        $this->runModuleCommand(
            filename: 'const.281.wasm',
            name: null,
            line: 652,
        );
    }

    #[Depends('testModule384')]
    public function testAssertReturn385(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '3632267264']],
            line: 653,
        );
    }

    #[Depends('testAssertReturn385')]
    public function testModule386(): void
    {
        $this->runModuleCommand(
            filename: 'const.282.wasm',
            name: null,
            line: 654,
        );
    }

    #[Depends('testModule386')]
    public function testAssertReturn387(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1484783617']],
            line: 655,
        );
    }

    #[Depends('testAssertReturn387')]
    public function testModule388(): void
    {
        $this->runModuleCommand(
            filename: 'const.283.wasm',
            name: null,
            line: 656,
        );
    }

    #[Depends('testModule388')]
    public function testAssertReturn389(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '3632267265']],
            line: 657,
        );
    }

    #[Depends('testAssertReturn389')]
    public function testModule390(): void
    {
        $this->runModuleCommand(
            filename: 'const.284.wasm',
            name: null,
            line: 658,
        );
    }

    #[Depends('testModule390')]
    public function testAssertReturn391(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1484783617']],
            line: 659,
        );
    }

    #[Depends('testAssertReturn391')]
    public function testModule392(): void
    {
        $this->runModuleCommand(
            filename: 'const.285.wasm',
            name: null,
            line: 660,
        );
    }

    #[Depends('testModule392')]
    public function testAssertReturn393(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '3632267265']],
            line: 661,
        );
    }

    #[Depends('testAssertReturn393')]
    public function testModule394(): void
    {
        $this->runModuleCommand(
            filename: 'const.286.wasm',
            name: null,
            line: 662,
        );
    }

    #[Depends('testModule394')]
    public function testAssertReturn395(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1484783618']],
            line: 663,
        );
    }

    #[Depends('testAssertReturn395')]
    public function testModule396(): void
    {
        $this->runModuleCommand(
            filename: 'const.287.wasm',
            name: null,
            line: 664,
        );
    }

    #[Depends('testModule396')]
    public function testAssertReturn397(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '3632267266']],
            line: 665,
        );
    }

    #[Depends('testAssertReturn397')]
    public function testModule398(): void
    {
        $this->runModuleCommand(
            filename: 'const.288.wasm',
            name: null,
            line: 668,
        );
    }

    #[Depends('testModule398')]
    public function testAssertReturn399(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 669,
        );
    }

    #[Depends('testAssertReturn399')]
    public function testModule400(): void
    {
        $this->runModuleCommand(
            filename: 'const.289.wasm',
            name: null,
            line: 670,
        );
    }

    #[Depends('testModule400')]
    public function testAssertReturn401(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2147483648']],
            line: 671,
        );
    }

    #[Depends('testAssertReturn401')]
    public function testModule402(): void
    {
        $this->runModuleCommand(
            filename: 'const.290.wasm',
            name: null,
            line: 672,
        );
    }

    #[Depends('testModule402')]
    public function testAssertReturn403(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 673,
        );
    }

    #[Depends('testAssertReturn403')]
    public function testModule404(): void
    {
        $this->runModuleCommand(
            filename: 'const.291.wasm',
            name: null,
            line: 674,
        );
    }

    #[Depends('testModule404')]
    public function testAssertReturn405(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 675,
        );
    }

    #[Depends('testAssertReturn405')]
    public function testModule406(): void
    {
        $this->runModuleCommand(
            filename: 'const.292.wasm',
            name: null,
            line: 676,
        );
    }

    #[Depends('testModule406')]
    public function testAssertReturn407(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 677,
        );
    }

    #[Depends('testAssertReturn407')]
    public function testModule408(): void
    {
        $this->runModuleCommand(
            filename: 'const.293.wasm',
            name: null,
            line: 678,
        );
    }

    #[Depends('testModule408')]
    public function testAssertReturn409(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 679,
        );
    }

    #[Depends('testAssertReturn409')]
    public function testModule410(): void
    {
        $this->runModuleCommand(
            filename: 'const.294.wasm',
            name: null,
            line: 680,
        );
    }

    #[Depends('testModule410')]
    public function testAssertReturn411(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 681,
        );
    }

    #[Depends('testAssertReturn411')]
    public function testModule412(): void
    {
        $this->runModuleCommand(
            filename: 'const.295.wasm',
            name: null,
            line: 682,
        );
    }

    #[Depends('testModule412')]
    public function testAssertReturn413(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 683,
        );
    }

    #[Depends('testAssertReturn413')]
    public function testModule414(): void
    {
        $this->runModuleCommand(
            filename: 'const.296.wasm',
            name: null,
            line: 684,
        );
    }

    #[Depends('testModule414')]
    public function testAssertReturn415(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 685,
        );
    }

    #[Depends('testAssertReturn415')]
    public function testModule416(): void
    {
        $this->runModuleCommand(
            filename: 'const.297.wasm',
            name: null,
            line: 686,
        );
    }

    #[Depends('testModule416')]
    public function testAssertReturn417(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 687,
        );
    }

    #[Depends('testAssertReturn417')]
    public function testModule418(): void
    {
        $this->runModuleCommand(
            filename: 'const.298.wasm',
            name: null,
            line: 688,
        );
    }

    #[Depends('testModule418')]
    public function testAssertReturn419(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 689,
        );
    }

    #[Depends('testAssertReturn419')]
    public function testModule420(): void
    {
        $this->runModuleCommand(
            filename: 'const.299.wasm',
            name: null,
            line: 690,
        );
    }

    #[Depends('testModule420')]
    public function testAssertReturn421(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2147483649']],
            line: 691,
        );
    }

    #[Depends('testAssertReturn421')]
    public function testModule422(): void
    {
        $this->runModuleCommand(
            filename: 'const.300.wasm',
            name: null,
            line: 692,
        );
    }

    #[Depends('testModule422')]
    public function testAssertReturn423(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2']],
            line: 693,
        );
    }

    #[Depends('testAssertReturn423')]
    public function testModule424(): void
    {
        $this->runModuleCommand(
            filename: 'const.301.wasm',
            name: null,
            line: 694,
        );
    }

    #[Depends('testModule424')]
    public function testAssertReturn425(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2147483650']],
            line: 695,
        );
    }

    #[Depends('testAssertReturn425')]
    public function testModule426(): void
    {
        $this->runModuleCommand(
            filename: 'const.302.wasm',
            name: null,
            line: 696,
        );
    }

    #[Depends('testModule426')]
    public function testAssertReturn427(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2']],
            line: 697,
        );
    }

    #[Depends('testAssertReturn427')]
    public function testModule428(): void
    {
        $this->runModuleCommand(
            filename: 'const.303.wasm',
            name: null,
            line: 698,
        );
    }

    #[Depends('testModule428')]
    public function testAssertReturn429(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2147483650']],
            line: 699,
        );
    }

    #[Depends('testAssertReturn429')]
    public function testModule430(): void
    {
        $this->runModuleCommand(
            filename: 'const.304.wasm',
            name: null,
            line: 700,
        );
    }

    #[Depends('testModule430')]
    public function testAssertReturn431(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2']],
            line: 701,
        );
    }

    #[Depends('testAssertReturn431')]
    public function testModule432(): void
    {
        $this->runModuleCommand(
            filename: 'const.305.wasm',
            name: null,
            line: 702,
        );
    }

    #[Depends('testModule432')]
    public function testAssertReturn433(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2147483650']],
            line: 703,
        );
    }

    #[Depends('testAssertReturn433')]
    public function testModule434(): void
    {
        $this->runModuleCommand(
            filename: 'const.306.wasm',
            name: null,
            line: 704,
        );
    }

    #[Depends('testModule434')]
    public function testAssertReturn435(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2']],
            line: 705,
        );
    }

    #[Depends('testAssertReturn435')]
    public function testModule436(): void
    {
        $this->runModuleCommand(
            filename: 'const.307.wasm',
            name: null,
            line: 706,
        );
    }

    #[Depends('testModule436')]
    public function testAssertReturn437(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2147483650']],
            line: 707,
        );
    }

    #[Depends('testAssertReturn437')]
    public function testModule438(): void
    {
        $this->runModuleCommand(
            filename: 'const.308.wasm',
            name: null,
            line: 708,
        );
    }

    #[Depends('testModule438')]
    public function testAssertReturn439(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2']],
            line: 709,
        );
    }

    #[Depends('testAssertReturn439')]
    public function testModule440(): void
    {
        $this->runModuleCommand(
            filename: 'const.309.wasm',
            name: null,
            line: 710,
        );
    }

    #[Depends('testModule440')]
    public function testAssertReturn441(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2147483650']],
            line: 711,
        );
    }

    #[Depends('testAssertReturn441')]
    public function testModule442(): void
    {
        $this->runModuleCommand(
            filename: 'const.310.wasm',
            name: null,
            line: 712,
        );
    }

    #[Depends('testModule442')]
    public function testAssertReturn443(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2']],
            line: 713,
        );
    }

    #[Depends('testAssertReturn443')]
    public function testModule444(): void
    {
        $this->runModuleCommand(
            filename: 'const.311.wasm',
            name: null,
            line: 714,
        );
    }

    #[Depends('testModule444')]
    public function testAssertReturn445(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2147483650']],
            line: 715,
        );
    }

    #[Depends('testAssertReturn445')]
    public function testModule446(): void
    {
        $this->runModuleCommand(
            filename: 'const.312.wasm',
            name: null,
            line: 716,
        );
    }

    #[Depends('testModule446')]
    public function testAssertReturn447(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2']],
            line: 717,
        );
    }

    #[Depends('testAssertReturn447')]
    public function testModule448(): void
    {
        $this->runModuleCommand(
            filename: 'const.313.wasm',
            name: null,
            line: 718,
        );
    }

    #[Depends('testModule448')]
    public function testAssertReturn449(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2147483650']],
            line: 719,
        );
    }

    #[Depends('testAssertReturn449')]
    public function testModule450(): void
    {
        $this->runModuleCommand(
            filename: 'const.314.wasm',
            name: null,
            line: 720,
        );
    }

    #[Depends('testModule450')]
    public function testAssertReturn451(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '3']],
            line: 721,
        );
    }

    #[Depends('testAssertReturn451')]
    public function testModule452(): void
    {
        $this->runModuleCommand(
            filename: 'const.315.wasm',
            name: null,
            line: 722,
        );
    }

    #[Depends('testModule452')]
    public function testAssertReturn453(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2147483651']],
            line: 723,
        );
    }

    #[Depends('testAssertReturn453')]
    public function testModule454(): void
    {
        $this->runModuleCommand(
            filename: 'const.316.wasm',
            name: null,
            line: 726,
        );
    }

    #[Depends('testModule454')]
    public function testAssertReturn455(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 727,
        );
    }

    #[Depends('testAssertReturn455')]
    public function testModule456(): void
    {
        $this->runModuleCommand(
            filename: 'const.317.wasm',
            name: null,
            line: 728,
        );
    }

    #[Depends('testModule456')]
    public function testAssertReturn457(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 729,
        );
    }

    #[Depends('testAssertReturn457')]
    public function testModule458(): void
    {
        $this->runModuleCommand(
            filename: 'const.318.wasm',
            name: null,
            line: 730,
        );
    }

    #[Depends('testModule458')]
    public function testAssertReturn459(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 731,
        );
    }

    #[Depends('testAssertReturn459')]
    public function testModule460(): void
    {
        $this->runModuleCommand(
            filename: 'const.319.wasm',
            name: null,
            line: 732,
        );
    }

    #[Depends('testModule460')]
    public function testAssertReturn461(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 733,
        );
    }

    #[Depends('testAssertReturn461')]
    public function testModule462(): void
    {
        $this->runModuleCommand(
            filename: 'const.320.wasm',
            name: null,
            line: 734,
        );
    }

    #[Depends('testModule462')]
    public function testAssertReturn463(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 735,
        );
    }

    #[Depends('testAssertReturn463')]
    public function testModule464(): void
    {
        $this->runModuleCommand(
            filename: 'const.321.wasm',
            name: null,
            line: 736,
        );
    }

    #[Depends('testModule464')]
    public function testAssertReturn465(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f32', 'value' => '4286578687']],
            line: 737,
        );
    }

    #[Depends('testAssertReturn465')]
    public function testModule466(): void
    {
        $this->runModuleCommand(
            filename: 'const.322.wasm',
            name: null,
            line: 740,
        );
    }

    #[Depends('testModule466')]
    public function testAssertReturn467(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '1905022642377719808']],
            line: 741,
        );
    }

    #[Depends('testAssertReturn467')]
    public function testModule468(): void
    {
        $this->runModuleCommand(
            filename: 'const.323.wasm',
            name: null,
            line: 742,
        );
    }

    #[Depends('testModule468')]
    public function testAssertReturn469(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '11128394679232495616']],
            line: 743,
        );
    }

    #[Depends('testAssertReturn469')]
    public function testModule470(): void
    {
        $this->runModuleCommand(
            filename: 'const.324.wasm',
            name: null,
            line: 744,
        );
    }

    #[Depends('testModule470')]
    public function testAssertReturn471(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '1905022642377719809']],
            line: 745,
        );
    }

    #[Depends('testAssertReturn471')]
    public function testModule472(): void
    {
        $this->runModuleCommand(
            filename: 'const.325.wasm',
            name: null,
            line: 746,
        );
    }

    #[Depends('testModule472')]
    public function testAssertReturn473(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '11128394679232495617']],
            line: 747,
        );
    }

    #[Depends('testAssertReturn473')]
    public function testModule474(): void
    {
        $this->runModuleCommand(
            filename: 'const.326.wasm',
            name: null,
            line: 748,
        );
    }

    #[Depends('testModule474')]
    public function testAssertReturn475(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '1905022642377719809']],
            line: 749,
        );
    }

    #[Depends('testAssertReturn475')]
    public function testModule476(): void
    {
        $this->runModuleCommand(
            filename: 'const.327.wasm',
            name: null,
            line: 750,
        );
    }

    #[Depends('testModule476')]
    public function testAssertReturn477(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '11128394679232495617']],
            line: 751,
        );
    }

    #[Depends('testAssertReturn477')]
    public function testModule478(): void
    {
        $this->runModuleCommand(
            filename: 'const.328.wasm',
            name: null,
            line: 752,
        );
    }

    #[Depends('testModule478')]
    public function testAssertReturn479(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '1905022642377719809']],
            line: 753,
        );
    }

    #[Depends('testAssertReturn479')]
    public function testModule480(): void
    {
        $this->runModuleCommand(
            filename: 'const.329.wasm',
            name: null,
            line: 754,
        );
    }

    #[Depends('testModule480')]
    public function testAssertReturn481(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '11128394679232495617']],
            line: 755,
        );
    }

    #[Depends('testAssertReturn481')]
    public function testModule482(): void
    {
        $this->runModuleCommand(
            filename: 'const.330.wasm',
            name: null,
            line: 756,
        );
    }

    #[Depends('testModule482')]
    public function testAssertReturn483(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '1905022642377719809']],
            line: 757,
        );
    }

    #[Depends('testAssertReturn483')]
    public function testModule484(): void
    {
        $this->runModuleCommand(
            filename: 'const.331.wasm',
            name: null,
            line: 758,
        );
    }

    #[Depends('testModule484')]
    public function testAssertReturn485(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '11128394679232495617']],
            line: 759,
        );
    }

    #[Depends('testAssertReturn485')]
    public function testModule486(): void
    {
        $this->runModuleCommand(
            filename: 'const.332.wasm',
            name: null,
            line: 760,
        );
    }

    #[Depends('testModule486')]
    public function testAssertReturn487(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '1905022642377719809']],
            line: 761,
        );
    }

    #[Depends('testAssertReturn487')]
    public function testModule488(): void
    {
        $this->runModuleCommand(
            filename: 'const.333.wasm',
            name: null,
            line: 762,
        );
    }

    #[Depends('testModule488')]
    public function testAssertReturn489(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '11128394679232495617']],
            line: 763,
        );
    }

    #[Depends('testAssertReturn489')]
    public function testModule490(): void
    {
        $this->runModuleCommand(
            filename: 'const.334.wasm',
            name: null,
            line: 764,
        );
    }

    #[Depends('testModule490')]
    public function testAssertReturn491(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '1905022642377719810']],
            line: 765,
        );
    }

    #[Depends('testAssertReturn491')]
    public function testModule492(): void
    {
        $this->runModuleCommand(
            filename: 'const.335.wasm',
            name: null,
            line: 766,
        );
    }

    #[Depends('testModule492')]
    public function testAssertReturn493(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '11128394679232495618']],
            line: 767,
        );
    }

    #[Depends('testAssertReturn493')]
    public function testModule494(): void
    {
        $this->runModuleCommand(
            filename: 'const.336.wasm',
            name: null,
            line: 768,
        );
    }

    #[Depends('testModule494')]
    public function testAssertReturn495(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '1905022642377719810']],
            line: 769,
        );
    }

    #[Depends('testAssertReturn495')]
    public function testModule496(): void
    {
        $this->runModuleCommand(
            filename: 'const.337.wasm',
            name: null,
            line: 770,
        );
    }

    #[Depends('testModule496')]
    public function testAssertReturn497(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '11128394679232495618']],
            line: 771,
        );
    }

    #[Depends('testAssertReturn497')]
    public function testModule498(): void
    {
        $this->runModuleCommand(
            filename: 'const.338.wasm',
            name: null,
            line: 772,
        );
    }

    #[Depends('testModule498')]
    public function testAssertReturn499(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '1905022642377719810']],
            line: 773,
        );
    }

    #[Depends('testAssertReturn499')]
    public function testModule500(): void
    {
        $this->runModuleCommand(
            filename: 'const.339.wasm',
            name: null,
            line: 774,
        );
    }

    #[Depends('testModule500')]
    public function testAssertReturn501(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '11128394679232495618']],
            line: 775,
        );
    }

    #[Depends('testAssertReturn501')]
    public function testModule502(): void
    {
        $this->runModuleCommand(
            filename: 'const.340.wasm',
            name: null,
            line: 776,
        );
    }

    #[Depends('testModule502')]
    public function testAssertReturn503(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '1905022642377719810']],
            line: 777,
        );
    }

    #[Depends('testAssertReturn503')]
    public function testModule504(): void
    {
        $this->runModuleCommand(
            filename: 'const.341.wasm',
            name: null,
            line: 778,
        );
    }

    #[Depends('testModule504')]
    public function testAssertReturn505(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '11128394679232495618']],
            line: 779,
        );
    }

    #[Depends('testAssertReturn505')]
    public function testModule506(): void
    {
        $this->runModuleCommand(
            filename: 'const.342.wasm',
            name: null,
            line: 780,
        );
    }

    #[Depends('testModule506')]
    public function testAssertReturn507(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '1905022642377719810']],
            line: 781,
        );
    }

    #[Depends('testAssertReturn507')]
    public function testModule508(): void
    {
        $this->runModuleCommand(
            filename: 'const.343.wasm',
            name: null,
            line: 782,
        );
    }

    #[Depends('testModule508')]
    public function testAssertReturn509(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '11128394679232495618']],
            line: 783,
        );
    }

    #[Depends('testAssertReturn509')]
    public function testModule510(): void
    {
        $this->runModuleCommand(
            filename: 'const.344.wasm',
            name: null,
            line: 784,
        );
    }

    #[Depends('testModule510')]
    public function testAssertReturn511(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '1905022642377719810']],
            line: 785,
        );
    }

    #[Depends('testAssertReturn511')]
    public function testModule512(): void
    {
        $this->runModuleCommand(
            filename: 'const.345.wasm',
            name: null,
            line: 786,
        );
    }

    #[Depends('testModule512')]
    public function testAssertReturn513(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '11128394679232495618']],
            line: 787,
        );
    }

    #[Depends('testAssertReturn513')]
    public function testModule514(): void
    {
        $this->runModuleCommand(
            filename: 'const.346.wasm',
            name: null,
            line: 788,
        );
    }

    #[Depends('testModule514')]
    public function testAssertReturn515(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '1905022642377719811']],
            line: 789,
        );
    }

    #[Depends('testAssertReturn515')]
    public function testModule516(): void
    {
        $this->runModuleCommand(
            filename: 'const.347.wasm',
            name: null,
            line: 790,
        );
    }

    #[Depends('testModule516')]
    public function testAssertReturn517(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '11128394679232495619']],
            line: 791,
        );
    }

    #[Depends('testAssertReturn517')]
    public function testModule518(): void
    {
        $this->runModuleCommand(
            filename: 'const.348.wasm',
            name: null,
            line: 793,
        );
    }

    #[Depends('testModule518')]
    public function testAssertReturn519(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '1905022642377719808']],
            line: 794,
        );
    }

    #[Depends('testAssertReturn519')]
    public function testModule520(): void
    {
        $this->runModuleCommand(
            filename: 'const.349.wasm',
            name: null,
            line: 795,
        );
    }

    #[Depends('testModule520')]
    public function testAssertReturn521(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '11128394679232495616']],
            line: 796,
        );
    }

    #[Depends('testAssertReturn521')]
    public function testModule522(): void
    {
        $this->runModuleCommand(
            filename: 'const.350.wasm',
            name: null,
            line: 797,
        );
    }

    #[Depends('testModule522')]
    public function testAssertReturn523(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '1905022642377719809']],
            line: 798,
        );
    }

    #[Depends('testAssertReturn523')]
    public function testModule524(): void
    {
        $this->runModuleCommand(
            filename: 'const.351.wasm',
            name: null,
            line: 799,
        );
    }

    #[Depends('testModule524')]
    public function testAssertReturn525(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '11128394679232495617']],
            line: 800,
        );
    }

    #[Depends('testAssertReturn525')]
    public function testModule526(): void
    {
        $this->runModuleCommand(
            filename: 'const.352.wasm',
            name: null,
            line: 801,
        );
    }

    #[Depends('testModule526')]
    public function testAssertReturn527(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '1905022642377719809']],
            line: 802,
        );
    }

    #[Depends('testAssertReturn527')]
    public function testModule528(): void
    {
        $this->runModuleCommand(
            filename: 'const.353.wasm',
            name: null,
            line: 803,
        );
    }

    #[Depends('testModule528')]
    public function testAssertReturn529(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '11128394679232495617']],
            line: 804,
        );
    }

    #[Depends('testAssertReturn529')]
    public function testModule530(): void
    {
        $this->runModuleCommand(
            filename: 'const.354.wasm',
            name: null,
            line: 805,
        );
    }

    #[Depends('testModule530')]
    public function testAssertReturn531(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '1905022642377719809']],
            line: 806,
        );
    }

    #[Depends('testAssertReturn531')]
    public function testModule532(): void
    {
        $this->runModuleCommand(
            filename: 'const.355.wasm',
            name: null,
            line: 807,
        );
    }

    #[Depends('testModule532')]
    public function testAssertReturn533(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '11128394679232495617']],
            line: 808,
        );
    }

    #[Depends('testAssertReturn533')]
    public function testModule534(): void
    {
        $this->runModuleCommand(
            filename: 'const.356.wasm',
            name: null,
            line: 809,
        );
    }

    #[Depends('testModule534')]
    public function testAssertReturn535(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '1905022642377719809']],
            line: 810,
        );
    }

    #[Depends('testAssertReturn535')]
    public function testModule536(): void
    {
        $this->runModuleCommand(
            filename: 'const.357.wasm',
            name: null,
            line: 811,
        );
    }

    #[Depends('testModule536')]
    public function testAssertReturn537(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '11128394679232495617']],
            line: 812,
        );
    }

    #[Depends('testAssertReturn537')]
    public function testModule538(): void
    {
        $this->runModuleCommand(
            filename: 'const.358.wasm',
            name: null,
            line: 813,
        );
    }

    #[Depends('testModule538')]
    public function testAssertReturn539(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '1905022642377719809']],
            line: 814,
        );
    }

    #[Depends('testAssertReturn539')]
    public function testModule540(): void
    {
        $this->runModuleCommand(
            filename: 'const.359.wasm',
            name: null,
            line: 815,
        );
    }

    #[Depends('testModule540')]
    public function testAssertReturn541(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '11128394679232495617']],
            line: 816,
        );
    }

    #[Depends('testAssertReturn541')]
    public function testModule542(): void
    {
        $this->runModuleCommand(
            filename: 'const.360.wasm',
            name: null,
            line: 817,
        );
    }

    #[Depends('testModule542')]
    public function testAssertReturn543(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '1905022642377719810']],
            line: 818,
        );
    }

    #[Depends('testAssertReturn543')]
    public function testModule544(): void
    {
        $this->runModuleCommand(
            filename: 'const.361.wasm',
            name: null,
            line: 819,
        );
    }

    #[Depends('testModule544')]
    public function testAssertReturn545(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '11128394679232495618']],
            line: 820,
        );
    }

    #[Depends('testAssertReturn545')]
    public function testModule546(): void
    {
        $this->runModuleCommand(
            filename: 'const.362.wasm',
            name: null,
            line: 821,
        );
    }

    #[Depends('testModule546')]
    public function testAssertReturn547(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '1905022642377719810']],
            line: 822,
        );
    }

    #[Depends('testAssertReturn547')]
    public function testModule548(): void
    {
        $this->runModuleCommand(
            filename: 'const.363.wasm',
            name: null,
            line: 823,
        );
    }

    #[Depends('testModule548')]
    public function testAssertReturn549(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '11128394679232495618']],
            line: 824,
        );
    }

    #[Depends('testAssertReturn549')]
    public function testModule550(): void
    {
        $this->runModuleCommand(
            filename: 'const.364.wasm',
            name: null,
            line: 825,
        );
    }

    #[Depends('testModule550')]
    public function testAssertReturn551(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '1905022642377719810']],
            line: 826,
        );
    }

    #[Depends('testAssertReturn551')]
    public function testModule552(): void
    {
        $this->runModuleCommand(
            filename: 'const.365.wasm',
            name: null,
            line: 827,
        );
    }

    #[Depends('testModule552')]
    public function testAssertReturn553(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '11128394679232495618']],
            line: 828,
        );
    }

    #[Depends('testAssertReturn553')]
    public function testModule554(): void
    {
        $this->runModuleCommand(
            filename: 'const.366.wasm',
            name: null,
            line: 829,
        );
    }

    #[Depends('testModule554')]
    public function testAssertReturn555(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '1905022642377719810']],
            line: 830,
        );
    }

    #[Depends('testAssertReturn555')]
    public function testModule556(): void
    {
        $this->runModuleCommand(
            filename: 'const.367.wasm',
            name: null,
            line: 831,
        );
    }

    #[Depends('testModule556')]
    public function testAssertReturn557(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '11128394679232495618']],
            line: 832,
        );
    }

    #[Depends('testAssertReturn557')]
    public function testModule558(): void
    {
        $this->runModuleCommand(
            filename: 'const.368.wasm',
            name: null,
            line: 833,
        );
    }

    #[Depends('testModule558')]
    public function testAssertReturn559(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '1905022642377719810']],
            line: 834,
        );
    }

    #[Depends('testAssertReturn559')]
    public function testModule560(): void
    {
        $this->runModuleCommand(
            filename: 'const.369.wasm',
            name: null,
            line: 835,
        );
    }

    #[Depends('testModule560')]
    public function testAssertReturn561(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '11128394679232495618']],
            line: 836,
        );
    }

    #[Depends('testAssertReturn561')]
    public function testModule562(): void
    {
        $this->runModuleCommand(
            filename: 'const.370.wasm',
            name: null,
            line: 837,
        );
    }

    #[Depends('testModule562')]
    public function testAssertReturn563(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '1905022642377719810']],
            line: 838,
        );
    }

    #[Depends('testAssertReturn563')]
    public function testModule564(): void
    {
        $this->runModuleCommand(
            filename: 'const.371.wasm',
            name: null,
            line: 839,
        );
    }

    #[Depends('testModule564')]
    public function testAssertReturn565(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '11128394679232495618']],
            line: 840,
        );
    }

    #[Depends('testAssertReturn565')]
    public function testModule566(): void
    {
        $this->runModuleCommand(
            filename: 'const.372.wasm',
            name: null,
            line: 841,
        );
    }

    #[Depends('testModule566')]
    public function testAssertReturn567(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '1905022642377719811']],
            line: 842,
        );
    }

    #[Depends('testAssertReturn567')]
    public function testModule568(): void
    {
        $this->runModuleCommand(
            filename: 'const.373.wasm',
            name: null,
            line: 843,
        );
    }

    #[Depends('testModule568')]
    public function testAssertReturn569(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '11128394679232495619']],
            line: 844,
        );
    }

    #[Depends('testAssertReturn569')]
    public function testModule570(): void
    {
        $this->runModuleCommand(
            filename: 'const.374.wasm',
            name: null,
            line: 846,
        );
    }

    #[Depends('testModule570')]
    public function testAssertReturn571(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9106278446543142912']],
            line: 847,
        );
    }

    #[Depends('testAssertReturn571')]
    public function testModule572(): void
    {
        $this->runModuleCommand(
            filename: 'const.375.wasm',
            name: null,
            line: 848,
        );
    }

    #[Depends('testModule572')]
    public function testAssertReturn573(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '18329650483397918720']],
            line: 849,
        );
    }

    #[Depends('testAssertReturn573')]
    public function testModule574(): void
    {
        $this->runModuleCommand(
            filename: 'const.376.wasm',
            name: null,
            line: 850,
        );
    }

    #[Depends('testModule574')]
    public function testAssertReturn575(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9106278446543142913']],
            line: 851,
        );
    }

    #[Depends('testAssertReturn575')]
    public function testModule576(): void
    {
        $this->runModuleCommand(
            filename: 'const.377.wasm',
            name: null,
            line: 852,
        );
    }

    #[Depends('testModule576')]
    public function testAssertReturn577(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '18329650483397918721']],
            line: 853,
        );
    }

    #[Depends('testAssertReturn577')]
    public function testModule578(): void
    {
        $this->runModuleCommand(
            filename: 'const.378.wasm',
            name: null,
            line: 854,
        );
    }

    #[Depends('testModule578')]
    public function testAssertReturn579(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9106278446543142913']],
            line: 855,
        );
    }

    #[Depends('testAssertReturn579')]
    public function testModule580(): void
    {
        $this->runModuleCommand(
            filename: 'const.379.wasm',
            name: null,
            line: 856,
        );
    }

    #[Depends('testModule580')]
    public function testAssertReturn581(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '18329650483397918721']],
            line: 857,
        );
    }

    #[Depends('testAssertReturn581')]
    public function testModule582(): void
    {
        $this->runModuleCommand(
            filename: 'const.380.wasm',
            name: null,
            line: 858,
        );
    }

    #[Depends('testModule582')]
    public function testAssertReturn583(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9106278446543142914']],
            line: 859,
        );
    }

    #[Depends('testAssertReturn583')]
    public function testModule584(): void
    {
        $this->runModuleCommand(
            filename: 'const.381.wasm',
            name: null,
            line: 860,
        );
    }

    #[Depends('testModule584')]
    public function testAssertReturn585(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '18329650483397918722']],
            line: 861,
        );
    }

    #[Depends('testAssertReturn585')]
    public function testModule586(): void
    {
        $this->runModuleCommand(
            filename: 'const.382.wasm',
            name: null,
            line: 864,
        );
    }

    #[Depends('testModule586')]
    public function testAssertReturn587(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '7309342195222315008']],
            line: 865,
        );
    }

    #[Depends('testAssertReturn587')]
    public function testModule588(): void
    {
        $this->runModuleCommand(
            filename: 'const.383.wasm',
            name: null,
            line: 866,
        );
    }

    #[Depends('testModule588')]
    public function testAssertReturn589(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '16532714232077090816']],
            line: 867,
        );
    }

    #[Depends('testAssertReturn589')]
    public function testModule590(): void
    {
        $this->runModuleCommand(
            filename: 'const.384.wasm',
            name: null,
            line: 868,
        );
    }

    #[Depends('testModule590')]
    public function testAssertReturn591(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '7309342195222315009']],
            line: 869,
        );
    }

    #[Depends('testAssertReturn591')]
    public function testModule592(): void
    {
        $this->runModuleCommand(
            filename: 'const.385.wasm',
            name: null,
            line: 870,
        );
    }

    #[Depends('testModule592')]
    public function testAssertReturn593(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '16532714232077090817']],
            line: 871,
        );
    }

    #[Depends('testAssertReturn593')]
    public function testModule594(): void
    {
        $this->runModuleCommand(
            filename: 'const.386.wasm',
            name: null,
            line: 872,
        );
    }

    #[Depends('testModule594')]
    public function testAssertReturn595(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '7309342195222315009']],
            line: 873,
        );
    }

    #[Depends('testAssertReturn595')]
    public function testModule596(): void
    {
        $this->runModuleCommand(
            filename: 'const.387.wasm',
            name: null,
            line: 874,
        );
    }

    #[Depends('testModule596')]
    public function testAssertReturn597(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '16532714232077090817']],
            line: 875,
        );
    }

    #[Depends('testAssertReturn597')]
    public function testModule598(): void
    {
        $this->runModuleCommand(
            filename: 'const.388.wasm',
            name: null,
            line: 876,
        );
    }

    #[Depends('testModule598')]
    public function testAssertReturn599(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '7309342195222315009']],
            line: 877,
        );
    }

    #[Depends('testAssertReturn599')]
    public function testModule600(): void
    {
        $this->runModuleCommand(
            filename: 'const.389.wasm',
            name: null,
            line: 878,
        );
    }

    #[Depends('testModule600')]
    public function testAssertReturn601(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '16532714232077090817']],
            line: 879,
        );
    }

    #[Depends('testAssertReturn601')]
    public function testModule602(): void
    {
        $this->runModuleCommand(
            filename: 'const.390.wasm',
            name: null,
            line: 880,
        );
    }

    #[Depends('testModule602')]
    public function testAssertReturn603(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '7309342195222315009']],
            line: 881,
        );
    }

    #[Depends('testAssertReturn603')]
    public function testModule604(): void
    {
        $this->runModuleCommand(
            filename: 'const.391.wasm',
            name: null,
            line: 882,
        );
    }

    #[Depends('testModule604')]
    public function testAssertReturn605(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '16532714232077090817']],
            line: 883,
        );
    }

    #[Depends('testAssertReturn605')]
    public function testModule606(): void
    {
        $this->runModuleCommand(
            filename: 'const.392.wasm',
            name: null,
            line: 884,
        );
    }

    #[Depends('testModule606')]
    public function testAssertReturn607(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '7309342195222315009']],
            line: 885,
        );
    }

    #[Depends('testAssertReturn607')]
    public function testModule608(): void
    {
        $this->runModuleCommand(
            filename: 'const.393.wasm',
            name: null,
            line: 886,
        );
    }

    #[Depends('testModule608')]
    public function testAssertReturn609(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '16532714232077090817']],
            line: 887,
        );
    }

    #[Depends('testAssertReturn609')]
    public function testModule610(): void
    {
        $this->runModuleCommand(
            filename: 'const.394.wasm',
            name: null,
            line: 888,
        );
    }

    #[Depends('testModule610')]
    public function testAssertReturn611(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '7309342195222315010']],
            line: 889,
        );
    }

    #[Depends('testAssertReturn611')]
    public function testModule612(): void
    {
        $this->runModuleCommand(
            filename: 'const.395.wasm',
            name: null,
            line: 890,
        );
    }

    #[Depends('testModule612')]
    public function testAssertReturn613(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '16532714232077090818']],
            line: 891,
        );
    }

    #[Depends('testAssertReturn613')]
    public function testModule614(): void
    {
        $this->runModuleCommand(
            filename: 'const.396.wasm',
            name: null,
            line: 892,
        );
    }

    #[Depends('testModule614')]
    public function testAssertReturn615(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '7309342195222315010']],
            line: 893,
        );
    }

    #[Depends('testAssertReturn615')]
    public function testModule616(): void
    {
        $this->runModuleCommand(
            filename: 'const.397.wasm',
            name: null,
            line: 894,
        );
    }

    #[Depends('testModule616')]
    public function testAssertReturn617(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '16532714232077090818']],
            line: 895,
        );
    }

    #[Depends('testAssertReturn617')]
    public function testModule618(): void
    {
        $this->runModuleCommand(
            filename: 'const.398.wasm',
            name: null,
            line: 896,
        );
    }

    #[Depends('testModule618')]
    public function testAssertReturn619(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '7309342195222315010']],
            line: 897,
        );
    }

    #[Depends('testAssertReturn619')]
    public function testModule620(): void
    {
        $this->runModuleCommand(
            filename: 'const.399.wasm',
            name: null,
            line: 898,
        );
    }

    #[Depends('testModule620')]
    public function testAssertReturn621(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '16532714232077090818']],
            line: 899,
        );
    }

    #[Depends('testAssertReturn621')]
    public function testModule622(): void
    {
        $this->runModuleCommand(
            filename: 'const.400.wasm',
            name: null,
            line: 900,
        );
    }

    #[Depends('testModule622')]
    public function testAssertReturn623(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '7309342195222315010']],
            line: 901,
        );
    }

    #[Depends('testAssertReturn623')]
    public function testModule624(): void
    {
        $this->runModuleCommand(
            filename: 'const.401.wasm',
            name: null,
            line: 902,
        );
    }

    #[Depends('testModule624')]
    public function testAssertReturn625(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '16532714232077090818']],
            line: 903,
        );
    }

    #[Depends('testAssertReturn625')]
    public function testModule626(): void
    {
        $this->runModuleCommand(
            filename: 'const.402.wasm',
            name: null,
            line: 904,
        );
    }

    #[Depends('testModule626')]
    public function testAssertReturn627(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '7309342195222315010']],
            line: 905,
        );
    }

    #[Depends('testAssertReturn627')]
    public function testModule628(): void
    {
        $this->runModuleCommand(
            filename: 'const.403.wasm',
            name: null,
            line: 906,
        );
    }

    #[Depends('testModule628')]
    public function testAssertReturn629(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '16532714232077090818']],
            line: 907,
        );
    }

    #[Depends('testAssertReturn629')]
    public function testModule630(): void
    {
        $this->runModuleCommand(
            filename: 'const.404.wasm',
            name: null,
            line: 908,
        );
    }

    #[Depends('testModule630')]
    public function testAssertReturn631(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '7309342195222315010']],
            line: 909,
        );
    }

    #[Depends('testAssertReturn631')]
    public function testModule632(): void
    {
        $this->runModuleCommand(
            filename: 'const.405.wasm',
            name: null,
            line: 910,
        );
    }

    #[Depends('testModule632')]
    public function testAssertReturn633(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '16532714232077090818']],
            line: 911,
        );
    }

    #[Depends('testAssertReturn633')]
    public function testModule634(): void
    {
        $this->runModuleCommand(
            filename: 'const.406.wasm',
            name: null,
            line: 912,
        );
    }

    #[Depends('testModule634')]
    public function testAssertReturn635(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '7309342195222315010']],
            line: 913,
        );
    }

    #[Depends('testAssertReturn635')]
    public function testModule636(): void
    {
        $this->runModuleCommand(
            filename: 'const.407.wasm',
            name: null,
            line: 914,
        );
    }

    #[Depends('testModule636')]
    public function testAssertReturn637(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '16532714232077090818']],
            line: 915,
        );
    }

    #[Depends('testAssertReturn637')]
    public function testModule638(): void
    {
        $this->runModuleCommand(
            filename: 'const.408.wasm',
            name: null,
            line: 916,
        );
    }

    #[Depends('testModule638')]
    public function testAssertReturn639(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '7309342195222315011']],
            line: 917,
        );
    }

    #[Depends('testAssertReturn639')]
    public function testModule640(): void
    {
        $this->runModuleCommand(
            filename: 'const.409.wasm',
            name: null,
            line: 918,
        );
    }

    #[Depends('testModule640')]
    public function testAssertReturn641(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '16532714232077090819']],
            line: 919,
        );
    }

    #[Depends('testAssertReturn641')]
    public function testModule642(): void
    {
        $this->runModuleCommand(
            filename: 'const.410.wasm',
            name: null,
            line: 921,
        );
    }

    #[Depends('testModule642')]
    public function testAssertReturn643(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '5044031582654955520']],
            line: 922,
        );
    }

    #[Depends('testAssertReturn643')]
    public function testModule644(): void
    {
        $this->runModuleCommand(
            filename: 'const.411.wasm',
            name: null,
            line: 923,
        );
    }

    #[Depends('testModule644')]
    public function testAssertReturn645(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '14267403619509731328']],
            line: 924,
        );
    }

    #[Depends('testAssertReturn645')]
    public function testModule646(): void
    {
        $this->runModuleCommand(
            filename: 'const.412.wasm',
            name: null,
            line: 925,
        );
    }

    #[Depends('testModule646')]
    public function testAssertReturn647(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '5044031582654955521']],
            line: 926,
        );
    }

    #[Depends('testAssertReturn647')]
    public function testModule648(): void
    {
        $this->runModuleCommand(
            filename: 'const.413.wasm',
            name: null,
            line: 927,
        );
    }

    #[Depends('testModule648')]
    public function testAssertReturn649(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '14267403619509731329']],
            line: 928,
        );
    }

    #[Depends('testAssertReturn649')]
    public function testModule650(): void
    {
        $this->runModuleCommand(
            filename: 'const.414.wasm',
            name: null,
            line: 929,
        );
    }

    #[Depends('testModule650')]
    public function testAssertReturn651(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '5044031582654955521']],
            line: 930,
        );
    }

    #[Depends('testAssertReturn651')]
    public function testModule652(): void
    {
        $this->runModuleCommand(
            filename: 'const.415.wasm',
            name: null,
            line: 931,
        );
    }

    #[Depends('testModule652')]
    public function testAssertReturn653(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '14267403619509731329']],
            line: 932,
        );
    }

    #[Depends('testAssertReturn653')]
    public function testModule654(): void
    {
        $this->runModuleCommand(
            filename: 'const.416.wasm',
            name: null,
            line: 933,
        );
    }

    #[Depends('testModule654')]
    public function testAssertReturn655(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '5044031582654955521']],
            line: 934,
        );
    }

    #[Depends('testAssertReturn655')]
    public function testModule656(): void
    {
        $this->runModuleCommand(
            filename: 'const.417.wasm',
            name: null,
            line: 935,
        );
    }

    #[Depends('testModule656')]
    public function testAssertReturn657(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '14267403619509731329']],
            line: 936,
        );
    }

    #[Depends('testAssertReturn657')]
    public function testModule658(): void
    {
        $this->runModuleCommand(
            filename: 'const.418.wasm',
            name: null,
            line: 937,
        );
    }

    #[Depends('testModule658')]
    public function testAssertReturn659(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '5044031582654955521']],
            line: 938,
        );
    }

    #[Depends('testAssertReturn659')]
    public function testModule660(): void
    {
        $this->runModuleCommand(
            filename: 'const.419.wasm',
            name: null,
            line: 939,
        );
    }

    #[Depends('testModule660')]
    public function testAssertReturn661(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '14267403619509731329']],
            line: 940,
        );
    }

    #[Depends('testAssertReturn661')]
    public function testModule662(): void
    {
        $this->runModuleCommand(
            filename: 'const.420.wasm',
            name: null,
            line: 941,
        );
    }

    #[Depends('testModule662')]
    public function testAssertReturn663(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '5044031582654955521']],
            line: 942,
        );
    }

    #[Depends('testAssertReturn663')]
    public function testModule664(): void
    {
        $this->runModuleCommand(
            filename: 'const.421.wasm',
            name: null,
            line: 943,
        );
    }

    #[Depends('testModule664')]
    public function testAssertReturn665(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '14267403619509731329']],
            line: 944,
        );
    }

    #[Depends('testAssertReturn665')]
    public function testModule666(): void
    {
        $this->runModuleCommand(
            filename: 'const.422.wasm',
            name: null,
            line: 945,
        );
    }

    #[Depends('testModule666')]
    public function testAssertReturn667(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '5044031582654955522']],
            line: 946,
        );
    }

    #[Depends('testAssertReturn667')]
    public function testModule668(): void
    {
        $this->runModuleCommand(
            filename: 'const.423.wasm',
            name: null,
            line: 947,
        );
    }

    #[Depends('testModule668')]
    public function testAssertReturn669(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '14267403619509731330']],
            line: 948,
        );
    }

    #[Depends('testAssertReturn669')]
    public function testModule670(): void
    {
        $this->runModuleCommand(
            filename: 'const.424.wasm',
            name: null,
            line: 949,
        );
    }

    #[Depends('testModule670')]
    public function testAssertReturn671(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '5044031582654955522']],
            line: 950,
        );
    }

    #[Depends('testAssertReturn671')]
    public function testModule672(): void
    {
        $this->runModuleCommand(
            filename: 'const.425.wasm',
            name: null,
            line: 951,
        );
    }

    #[Depends('testModule672')]
    public function testAssertReturn673(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '14267403619509731330']],
            line: 952,
        );
    }

    #[Depends('testAssertReturn673')]
    public function testModule674(): void
    {
        $this->runModuleCommand(
            filename: 'const.426.wasm',
            name: null,
            line: 953,
        );
    }

    #[Depends('testModule674')]
    public function testAssertReturn675(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '5044031582654955522']],
            line: 954,
        );
    }

    #[Depends('testAssertReturn675')]
    public function testModule676(): void
    {
        $this->runModuleCommand(
            filename: 'const.427.wasm',
            name: null,
            line: 955,
        );
    }

    #[Depends('testModule676')]
    public function testAssertReturn677(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '14267403619509731330']],
            line: 956,
        );
    }

    #[Depends('testAssertReturn677')]
    public function testModule678(): void
    {
        $this->runModuleCommand(
            filename: 'const.428.wasm',
            name: null,
            line: 957,
        );
    }

    #[Depends('testModule678')]
    public function testAssertReturn679(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '5044031582654955522']],
            line: 958,
        );
    }

    #[Depends('testAssertReturn679')]
    public function testModule680(): void
    {
        $this->runModuleCommand(
            filename: 'const.429.wasm',
            name: null,
            line: 959,
        );
    }

    #[Depends('testModule680')]
    public function testAssertReturn681(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '14267403619509731330']],
            line: 960,
        );
    }

    #[Depends('testAssertReturn681')]
    public function testModule682(): void
    {
        $this->runModuleCommand(
            filename: 'const.430.wasm',
            name: null,
            line: 961,
        );
    }

    #[Depends('testModule682')]
    public function testAssertReturn683(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '5044031582654955522']],
            line: 962,
        );
    }

    #[Depends('testAssertReturn683')]
    public function testModule684(): void
    {
        $this->runModuleCommand(
            filename: 'const.431.wasm',
            name: null,
            line: 963,
        );
    }

    #[Depends('testModule684')]
    public function testAssertReturn685(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '14267403619509731330']],
            line: 964,
        );
    }

    #[Depends('testAssertReturn685')]
    public function testModule686(): void
    {
        $this->runModuleCommand(
            filename: 'const.432.wasm',
            name: null,
            line: 965,
        );
    }

    #[Depends('testModule686')]
    public function testAssertReturn687(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '5044031582654955522']],
            line: 966,
        );
    }

    #[Depends('testAssertReturn687')]
    public function testModule688(): void
    {
        $this->runModuleCommand(
            filename: 'const.433.wasm',
            name: null,
            line: 967,
        );
    }

    #[Depends('testModule688')]
    public function testAssertReturn689(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '14267403619509731330']],
            line: 968,
        );
    }

    #[Depends('testAssertReturn689')]
    public function testModule690(): void
    {
        $this->runModuleCommand(
            filename: 'const.434.wasm',
            name: null,
            line: 969,
        );
    }

    #[Depends('testModule690')]
    public function testAssertReturn691(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '5044031582654955522']],
            line: 970,
        );
    }

    #[Depends('testAssertReturn691')]
    public function testModule692(): void
    {
        $this->runModuleCommand(
            filename: 'const.435.wasm',
            name: null,
            line: 971,
        );
    }

    #[Depends('testModule692')]
    public function testAssertReturn693(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '14267403619509731330']],
            line: 972,
        );
    }

    #[Depends('testAssertReturn693')]
    public function testModule694(): void
    {
        $this->runModuleCommand(
            filename: 'const.436.wasm',
            name: null,
            line: 973,
        );
    }

    #[Depends('testModule694')]
    public function testAssertReturn695(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '5044031582654955523']],
            line: 974,
        );
    }

    #[Depends('testAssertReturn695')]
    public function testModule696(): void
    {
        $this->runModuleCommand(
            filename: 'const.437.wasm',
            name: null,
            line: 975,
        );
    }

    #[Depends('testModule696')]
    public function testAssertReturn697(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '14267403619509731331']],
            line: 976,
        );
    }

    #[Depends('testAssertReturn697')]
    public function testModule698(): void
    {
        $this->runModuleCommand(
            filename: 'const.438.wasm',
            name: null,
            line: 978,
        );
    }

    #[Depends('testModule698')]
    public function testAssertReturn699(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4877398396442247168']],
            line: 979,
        );
    }

    #[Depends('testAssertReturn699')]
    public function testModule700(): void
    {
        $this->runModuleCommand(
            filename: 'const.439.wasm',
            name: null,
            line: 980,
        );
    }

    #[Depends('testModule700')]
    public function testAssertReturn701(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '14100770433297022976']],
            line: 981,
        );
    }

    #[Depends('testAssertReturn701')]
    public function testModule702(): void
    {
        $this->runModuleCommand(
            filename: 'const.440.wasm',
            name: null,
            line: 982,
        );
    }

    #[Depends('testModule702')]
    public function testAssertReturn703(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4877398396442247169']],
            line: 983,
        );
    }

    #[Depends('testAssertReturn703')]
    public function testModule704(): void
    {
        $this->runModuleCommand(
            filename: 'const.441.wasm',
            name: null,
            line: 984,
        );
    }

    #[Depends('testModule704')]
    public function testAssertReturn705(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '14100770433297022977']],
            line: 985,
        );
    }

    #[Depends('testAssertReturn705')]
    public function testModule706(): void
    {
        $this->runModuleCommand(
            filename: 'const.442.wasm',
            name: null,
            line: 986,
        );
    }

    #[Depends('testModule706')]
    public function testAssertReturn707(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4877398396442247169']],
            line: 987,
        );
    }

    #[Depends('testAssertReturn707')]
    public function testModule708(): void
    {
        $this->runModuleCommand(
            filename: 'const.443.wasm',
            name: null,
            line: 988,
        );
    }

    #[Depends('testModule708')]
    public function testAssertReturn709(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '14100770433297022977']],
            line: 989,
        );
    }

    #[Depends('testAssertReturn709')]
    public function testModule710(): void
    {
        $this->runModuleCommand(
            filename: 'const.444.wasm',
            name: null,
            line: 990,
        );
    }

    #[Depends('testModule710')]
    public function testAssertReturn711(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4877398396442247170']],
            line: 991,
        );
    }

    #[Depends('testAssertReturn711')]
    public function testModule712(): void
    {
        $this->runModuleCommand(
            filename: 'const.445.wasm',
            name: null,
            line: 992,
        );
    }

    #[Depends('testModule712')]
    public function testAssertReturn713(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '14100770433297022978']],
            line: 993,
        );
    }

    #[Depends('testAssertReturn713')]
    public function testModule714(): void
    {
        $this->runModuleCommand(
            filename: 'const.446.wasm',
            name: null,
            line: 996,
        );
    }

    #[Depends('testModule714')]
    public function testAssertReturn715(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 997,
        );
    }

    #[Depends('testAssertReturn715')]
    public function testModule716(): void
    {
        $this->runModuleCommand(
            filename: 'const.447.wasm',
            name: null,
            line: 998,
        );
    }

    #[Depends('testModule716')]
    public function testAssertReturn717(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 999,
        );
    }

    #[Depends('testAssertReturn717')]
    public function testModule718(): void
    {
        $this->runModuleCommand(
            filename: 'const.448.wasm',
            name: null,
            line: 1000,
        );
    }

    #[Depends('testModule718')]
    public function testAssertReturn719(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '1']],
            line: 1001,
        );
    }

    #[Depends('testAssertReturn719')]
    public function testModule720(): void
    {
        $this->runModuleCommand(
            filename: 'const.449.wasm',
            name: null,
            line: 1002,
        );
    }

    #[Depends('testModule720')]
    public function testAssertReturn721(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9223372036854775809']],
            line: 1003,
        );
    }

    #[Depends('testAssertReturn721')]
    public function testModule722(): void
    {
        $this->runModuleCommand(
            filename: 'const.450.wasm',
            name: null,
            line: 1004,
        );
    }

    #[Depends('testModule722')]
    public function testAssertReturn723(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '1']],
            line: 1005,
        );
    }

    #[Depends('testAssertReturn723')]
    public function testModule724(): void
    {
        $this->runModuleCommand(
            filename: 'const.451.wasm',
            name: null,
            line: 1006,
        );
    }

    #[Depends('testModule724')]
    public function testAssertReturn725(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9223372036854775809']],
            line: 1007,
        );
    }

    #[Depends('testAssertReturn725')]
    public function testModule726(): void
    {
        $this->runModuleCommand(
            filename: 'const.452.wasm',
            name: null,
            line: 1008,
        );
    }

    #[Depends('testModule726')]
    public function testAssertReturn727(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '1']],
            line: 1009,
        );
    }

    #[Depends('testAssertReturn727')]
    public function testModule728(): void
    {
        $this->runModuleCommand(
            filename: 'const.453.wasm',
            name: null,
            line: 1010,
        );
    }

    #[Depends('testModule728')]
    public function testAssertReturn729(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9223372036854775809']],
            line: 1011,
        );
    }

    #[Depends('testAssertReturn729')]
    public function testModule730(): void
    {
        $this->runModuleCommand(
            filename: 'const.454.wasm',
            name: null,
            line: 1012,
        );
    }

    #[Depends('testModule730')]
    public function testAssertReturn731(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '1']],
            line: 1013,
        );
    }

    #[Depends('testAssertReturn731')]
    public function testModule732(): void
    {
        $this->runModuleCommand(
            filename: 'const.455.wasm',
            name: null,
            line: 1014,
        );
    }

    #[Depends('testModule732')]
    public function testAssertReturn733(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9223372036854775809']],
            line: 1015,
        );
    }

    #[Depends('testAssertReturn733')]
    public function testModule734(): void
    {
        $this->runModuleCommand(
            filename: 'const.456.wasm',
            name: null,
            line: 1016,
        );
    }

    #[Depends('testModule734')]
    public function testAssertReturn735(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '1']],
            line: 1017,
        );
    }

    #[Depends('testAssertReturn735')]
    public function testModule736(): void
    {
        $this->runModuleCommand(
            filename: 'const.457.wasm',
            name: null,
            line: 1018,
        );
    }

    #[Depends('testModule736')]
    public function testAssertReturn737(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9223372036854775809']],
            line: 1019,
        );
    }

    #[Depends('testAssertReturn737')]
    public function testModule738(): void
    {
        $this->runModuleCommand(
            filename: 'const.458.wasm',
            name: null,
            line: 1020,
        );
    }

    #[Depends('testModule738')]
    public function testAssertReturn739(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '2']],
            line: 1021,
        );
    }

    #[Depends('testAssertReturn739')]
    public function testModule740(): void
    {
        $this->runModuleCommand(
            filename: 'const.459.wasm',
            name: null,
            line: 1022,
        );
    }

    #[Depends('testModule740')]
    public function testAssertReturn741(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9223372036854775810']],
            line: 1023,
        );
    }

    #[Depends('testAssertReturn741')]
    public function testModule742(): void
    {
        $this->runModuleCommand(
            filename: 'const.460.wasm',
            name: null,
            line: 1024,
        );
    }

    #[Depends('testModule742')]
    public function testAssertReturn743(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '2']],
            line: 1025,
        );
    }

    #[Depends('testAssertReturn743')]
    public function testModule744(): void
    {
        $this->runModuleCommand(
            filename: 'const.461.wasm',
            name: null,
            line: 1026,
        );
    }

    #[Depends('testModule744')]
    public function testAssertReturn745(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9223372036854775810']],
            line: 1027,
        );
    }

    #[Depends('testAssertReturn745')]
    public function testModule746(): void
    {
        $this->runModuleCommand(
            filename: 'const.462.wasm',
            name: null,
            line: 1028,
        );
    }

    #[Depends('testModule746')]
    public function testAssertReturn747(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '2']],
            line: 1029,
        );
    }

    #[Depends('testAssertReturn747')]
    public function testModule748(): void
    {
        $this->runModuleCommand(
            filename: 'const.463.wasm',
            name: null,
            line: 1030,
        );
    }

    #[Depends('testModule748')]
    public function testAssertReturn749(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9223372036854775810']],
            line: 1031,
        );
    }

    #[Depends('testAssertReturn749')]
    public function testModule750(): void
    {
        $this->runModuleCommand(
            filename: 'const.464.wasm',
            name: null,
            line: 1032,
        );
    }

    #[Depends('testModule750')]
    public function testAssertReturn751(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '2']],
            line: 1033,
        );
    }

    #[Depends('testAssertReturn751')]
    public function testModule752(): void
    {
        $this->runModuleCommand(
            filename: 'const.465.wasm',
            name: null,
            line: 1034,
        );
    }

    #[Depends('testModule752')]
    public function testAssertReturn753(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9223372036854775810']],
            line: 1035,
        );
    }

    #[Depends('testAssertReturn753')]
    public function testModule754(): void
    {
        $this->runModuleCommand(
            filename: 'const.466.wasm',
            name: null,
            line: 1036,
        );
    }

    #[Depends('testModule754')]
    public function testAssertReturn755(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '2']],
            line: 1037,
        );
    }

    #[Depends('testAssertReturn755')]
    public function testModule756(): void
    {
        $this->runModuleCommand(
            filename: 'const.467.wasm',
            name: null,
            line: 1038,
        );
    }

    #[Depends('testModule756')]
    public function testAssertReturn757(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9223372036854775810']],
            line: 1039,
        );
    }

    #[Depends('testAssertReturn757')]
    public function testModule758(): void
    {
        $this->runModuleCommand(
            filename: 'const.468.wasm',
            name: null,
            line: 1040,
        );
    }

    #[Depends('testModule758')]
    public function testAssertReturn759(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '2']],
            line: 1041,
        );
    }

    #[Depends('testAssertReturn759')]
    public function testModule760(): void
    {
        $this->runModuleCommand(
            filename: 'const.469.wasm',
            name: null,
            line: 1042,
        );
    }

    #[Depends('testModule760')]
    public function testAssertReturn761(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9223372036854775810']],
            line: 1043,
        );
    }

    #[Depends('testAssertReturn761')]
    public function testModule762(): void
    {
        $this->runModuleCommand(
            filename: 'const.470.wasm',
            name: null,
            line: 1044,
        );
    }

    #[Depends('testModule762')]
    public function testAssertReturn763(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '2']],
            line: 1045,
        );
    }

    #[Depends('testAssertReturn763')]
    public function testModule764(): void
    {
        $this->runModuleCommand(
            filename: 'const.471.wasm',
            name: null,
            line: 1046,
        );
    }

    #[Depends('testModule764')]
    public function testAssertReturn765(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9223372036854775810']],
            line: 1047,
        );
    }

    #[Depends('testAssertReturn765')]
    public function testModule766(): void
    {
        $this->runModuleCommand(
            filename: 'const.472.wasm',
            name: null,
            line: 1048,
        );
    }

    #[Depends('testModule766')]
    public function testAssertReturn767(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '4503599627370499']],
            line: 1049,
        );
    }

    #[Depends('testAssertReturn767')]
    public function testModule768(): void
    {
        $this->runModuleCommand(
            filename: 'const.473.wasm',
            name: null,
            line: 1050,
        );
    }

    #[Depends('testModule768')]
    public function testAssertReturn769(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9227875636482146307']],
            line: 1051,
        );
    }

    #[Depends('testAssertReturn769')]
    public function testModule770(): void
    {
        $this->runModuleCommand(
            filename: 'const.474.wasm',
            name: null,
            line: 1054,
        );
    }

    #[Depends('testModule770')]
    public function testAssertReturn771(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9218868437227405311']],
            line: 1055,
        );
    }

    #[Depends('testAssertReturn771')]
    public function testModule772(): void
    {
        $this->runModuleCommand(
            filename: 'const.475.wasm',
            name: null,
            line: 1056,
        );
    }

    #[Depends('testModule772')]
    public function testAssertReturn773(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '18442240474082181119']],
            line: 1057,
        );
    }

    #[Depends('testAssertReturn773')]
    public function testModule774(): void
    {
        $this->runModuleCommand(
            filename: 'const.476.wasm',
            name: null,
            line: 1058,
        );
    }

    #[Depends('testModule774')]
    public function testAssertReturn775(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '9218868437227405311']],
            line: 1059,
        );
    }

    #[Depends('testAssertReturn775')]
    public function testModule776(): void
    {
        $this->runModuleCommand(
            filename: 'const.477.wasm',
            name: null,
            line: 1060,
        );
    }

    #[Depends('testModule776')]
    public function testAssertReturn777(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f', 'args' => []],
            expected: [['type' => 'f64', 'value' => '18442240474082181119']],
            line: 1061,
        );
    }
}
