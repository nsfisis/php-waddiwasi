<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class AlignTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'align.0.wasm',
            name: null,
            line: 3,
        );
    }

    #[Depends('testModule0')]
    public function testModule1(): void
    {
        $this->runModuleCommand(
            filename: 'align.1.wasm',
            name: null,
            line: 4,
        );
    }

    #[Depends('testModule1')]
    public function testModule2(): void
    {
        $this->runModuleCommand(
            filename: 'align.2.wasm',
            name: null,
            line: 5,
        );
    }

    #[Depends('testModule2')]
    public function testModule3(): void
    {
        $this->runModuleCommand(
            filename: 'align.3.wasm',
            name: null,
            line: 6,
        );
    }

    #[Depends('testModule3')]
    public function testModule4(): void
    {
        $this->runModuleCommand(
            filename: 'align.4.wasm',
            name: null,
            line: 7,
        );
    }

    #[Depends('testModule4')]
    public function testModule5(): void
    {
        $this->runModuleCommand(
            filename: 'align.5.wasm',
            name: null,
            line: 8,
        );
    }

    #[Depends('testModule5')]
    public function testModule6(): void
    {
        $this->runModuleCommand(
            filename: 'align.6.wasm',
            name: null,
            line: 9,
        );
    }

    #[Depends('testModule6')]
    public function testModule7(): void
    {
        $this->runModuleCommand(
            filename: 'align.7.wasm',
            name: null,
            line: 10,
        );
    }

    #[Depends('testModule7')]
    public function testModule8(): void
    {
        $this->runModuleCommand(
            filename: 'align.8.wasm',
            name: null,
            line: 11,
        );
    }

    #[Depends('testModule8')]
    public function testModule9(): void
    {
        $this->runModuleCommand(
            filename: 'align.9.wasm',
            name: null,
            line: 12,
        );
    }

    #[Depends('testModule9')]
    public function testModule10(): void
    {
        $this->runModuleCommand(
            filename: 'align.10.wasm',
            name: null,
            line: 13,
        );
    }

    #[Depends('testModule10')]
    public function testModule11(): void
    {
        $this->runModuleCommand(
            filename: 'align.11.wasm',
            name: null,
            line: 14,
        );
    }

    #[Depends('testModule11')]
    public function testModule12(): void
    {
        $this->runModuleCommand(
            filename: 'align.12.wasm',
            name: null,
            line: 15,
        );
    }

    #[Depends('testModule12')]
    public function testModule13(): void
    {
        $this->runModuleCommand(
            filename: 'align.13.wasm',
            name: null,
            line: 16,
        );
    }

    #[Depends('testModule13')]
    public function testModule14(): void
    {
        $this->runModuleCommand(
            filename: 'align.14.wasm',
            name: null,
            line: 17,
        );
    }

    #[Depends('testModule14')]
    public function testModule15(): void
    {
        $this->runModuleCommand(
            filename: 'align.15.wasm',
            name: null,
            line: 18,
        );
    }

    #[Depends('testModule15')]
    public function testModule16(): void
    {
        $this->runModuleCommand(
            filename: 'align.16.wasm',
            name: null,
            line: 19,
        );
    }

    #[Depends('testModule16')]
    public function testModule17(): void
    {
        $this->runModuleCommand(
            filename: 'align.17.wasm',
            name: null,
            line: 20,
        );
    }

    #[Depends('testModule17')]
    public function testModule18(): void
    {
        $this->runModuleCommand(
            filename: 'align.18.wasm',
            name: null,
            line: 21,
        );
    }

    #[Depends('testModule18')]
    public function testModule19(): void
    {
        $this->runModuleCommand(
            filename: 'align.19.wasm',
            name: null,
            line: 22,
        );
    }

    #[Depends('testModule19')]
    public function testModule20(): void
    {
        $this->runModuleCommand(
            filename: 'align.20.wasm',
            name: null,
            line: 23,
        );
    }

    #[Depends('testModule20')]
    public function testModule21(): void
    {
        $this->runModuleCommand(
            filename: 'align.21.wasm',
            name: null,
            line: 24,
        );
    }

    #[Depends('testModule21')]
    public function testModule22(): void
    {
        $this->runModuleCommand(
            filename: 'align.22.wasm',
            name: null,
            line: 25,
        );
    }

    #[DoesNotPerformAssertions]
    #[Depends('testModule22')]
    public function testAssertMalformed23(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed23')]
    public function testAssertMalformed24(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed24')]
    public function testAssertMalformed25(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed25')]
    public function testAssertMalformed26(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed26')]
    public function testAssertMalformed27(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed27')]
    public function testAssertMalformed28(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed28')]
    public function testAssertMalformed29(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed29')]
    public function testAssertMalformed30(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed30')]
    public function testAssertMalformed31(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed31')]
    public function testAssertMalformed32(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed32')]
    public function testAssertMalformed33(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed33')]
    public function testAssertMalformed34(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed34')]
    public function testAssertMalformed35(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed35')]
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

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed54')]
    public function testAssertMalformed55(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed55')]
    public function testAssertMalformed56(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed56')]
    public function testAssertMalformed57(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed57')]
    public function testAssertMalformed58(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed58')]
    public function testAssertMalformed59(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed59')]
    public function testAssertMalformed60(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed60')]
    public function testAssertMalformed61(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed61')]
    public function testAssertMalformed62(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed62')]
    public function testAssertMalformed63(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed63')]
    public function testAssertMalformed64(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed64')]
    public function testAssertMalformed65(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed65')]
    public function testAssertMalformed66(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed66')]
    public function testAssertMalformed67(): void
    {
    }

    #[DoesNotPerformAssertions]
    #[Depends('testAssertMalformed67')]
    public function testAssertMalformed68(): void
    {
    }

    #[Depends('testAssertMalformed68')]
    public function testAssertInvalid69(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.69.wasm',
            text: 'alignment must not be larger than natural',
            line: 306,
        );
    }

    #[Depends('testAssertInvalid69')]
    public function testAssertInvalid70(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.70.wasm',
            text: 'alignment must not be larger than natural',
            line: 310,
        );
    }

    #[Depends('testAssertInvalid70')]
    public function testAssertInvalid71(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.71.wasm',
            text: 'alignment must not be larger than natural',
            line: 314,
        );
    }

    #[Depends('testAssertInvalid71')]
    public function testAssertInvalid72(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.72.wasm',
            text: 'alignment must not be larger than natural',
            line: 318,
        );
    }

    #[Depends('testAssertInvalid72')]
    public function testAssertInvalid73(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.73.wasm',
            text: 'alignment must not be larger than natural',
            line: 322,
        );
    }

    #[Depends('testAssertInvalid73')]
    public function testAssertInvalid74(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.74.wasm',
            text: 'alignment must not be larger than natural',
            line: 326,
        );
    }

    #[Depends('testAssertInvalid74')]
    public function testAssertInvalid75(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.75.wasm',
            text: 'alignment must not be larger than natural',
            line: 330,
        );
    }

    #[Depends('testAssertInvalid75')]
    public function testAssertInvalid76(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.76.wasm',
            text: 'alignment must not be larger than natural',
            line: 334,
        );
    }

    #[Depends('testAssertInvalid76')]
    public function testAssertInvalid77(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.77.wasm',
            text: 'alignment must not be larger than natural',
            line: 338,
        );
    }

    #[Depends('testAssertInvalid77')]
    public function testAssertInvalid78(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.78.wasm',
            text: 'alignment must not be larger than natural',
            line: 342,
        );
    }

    #[Depends('testAssertInvalid78')]
    public function testAssertInvalid79(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.79.wasm',
            text: 'alignment must not be larger than natural',
            line: 346,
        );
    }

    #[Depends('testAssertInvalid79')]
    public function testAssertInvalid80(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.80.wasm',
            text: 'alignment must not be larger than natural',
            line: 350,
        );
    }

    #[Depends('testAssertInvalid80')]
    public function testAssertInvalid81(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.81.wasm',
            text: 'alignment must not be larger than natural',
            line: 354,
        );
    }

    #[Depends('testAssertInvalid81')]
    public function testAssertInvalid82(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.82.wasm',
            text: 'alignment must not be larger than natural',
            line: 358,
        );
    }

    #[Depends('testAssertInvalid82')]
    public function testAssertInvalid83(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.83.wasm',
            text: 'alignment must not be larger than natural',
            line: 363,
        );
    }

    #[Depends('testAssertInvalid83')]
    public function testAssertInvalid84(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.84.wasm',
            text: 'alignment must not be larger than natural',
            line: 367,
        );
    }

    #[Depends('testAssertInvalid84')]
    public function testAssertInvalid85(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.85.wasm',
            text: 'alignment must not be larger than natural',
            line: 371,
        );
    }

    #[Depends('testAssertInvalid85')]
    public function testAssertInvalid86(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.86.wasm',
            text: 'alignment must not be larger than natural',
            line: 375,
        );
    }

    #[Depends('testAssertInvalid86')]
    public function testAssertInvalid87(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.87.wasm',
            text: 'alignment must not be larger than natural',
            line: 379,
        );
    }

    #[Depends('testAssertInvalid87')]
    public function testAssertInvalid88(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.88.wasm',
            text: 'alignment must not be larger than natural',
            line: 383,
        );
    }

    #[Depends('testAssertInvalid88')]
    public function testAssertInvalid89(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.89.wasm',
            text: 'alignment must not be larger than natural',
            line: 387,
        );
    }

    #[Depends('testAssertInvalid89')]
    public function testAssertInvalid90(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.90.wasm',
            text: 'alignment must not be larger than natural',
            line: 391,
        );
    }

    #[Depends('testAssertInvalid90')]
    public function testAssertInvalid91(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.91.wasm',
            text: 'alignment must not be larger than natural',
            line: 395,
        );
    }

    #[Depends('testAssertInvalid91')]
    public function testAssertInvalid92(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.92.wasm',
            text: 'alignment must not be larger than natural',
            line: 399,
        );
    }

    #[Depends('testAssertInvalid92')]
    public function testAssertInvalid93(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.93.wasm',
            text: 'alignment must not be larger than natural',
            line: 403,
        );
    }

    #[Depends('testAssertInvalid93')]
    public function testAssertInvalid94(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.94.wasm',
            text: 'alignment must not be larger than natural',
            line: 407,
        );
    }

    #[Depends('testAssertInvalid94')]
    public function testAssertInvalid95(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.95.wasm',
            text: 'alignment must not be larger than natural',
            line: 411,
        );
    }

    #[Depends('testAssertInvalid95')]
    public function testAssertInvalid96(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.96.wasm',
            text: 'alignment must not be larger than natural',
            line: 415,
        );
    }

    #[Depends('testAssertInvalid96')]
    public function testAssertInvalid97(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.97.wasm',
            text: 'alignment must not be larger than natural',
            line: 420,
        );
    }

    #[Depends('testAssertInvalid97')]
    public function testAssertInvalid98(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.98.wasm',
            text: 'alignment must not be larger than natural',
            line: 424,
        );
    }

    #[Depends('testAssertInvalid98')]
    public function testAssertInvalid99(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.99.wasm',
            text: 'alignment must not be larger than natural',
            line: 428,
        );
    }

    #[Depends('testAssertInvalid99')]
    public function testAssertInvalid100(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.100.wasm',
            text: 'alignment must not be larger than natural',
            line: 432,
        );
    }

    #[Depends('testAssertInvalid100')]
    public function testAssertInvalid101(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.101.wasm',
            text: 'alignment must not be larger than natural',
            line: 436,
        );
    }

    #[Depends('testAssertInvalid101')]
    public function testAssertInvalid102(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.102.wasm',
            text: 'alignment must not be larger than natural',
            line: 440,
        );
    }

    #[Depends('testAssertInvalid102')]
    public function testAssertInvalid103(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.103.wasm',
            text: 'alignment must not be larger than natural',
            line: 444,
        );
    }

    #[Depends('testAssertInvalid103')]
    public function testAssertInvalid104(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.104.wasm',
            text: 'alignment must not be larger than natural',
            line: 448,
        );
    }

    #[Depends('testAssertInvalid104')]
    public function testAssertInvalid105(): void
    {
        $this->runAssertInvalidCommand(
            filename: 'align.105.wasm',
            text: 'alignment must not be larger than natural',
            line: 452,
        );
    }

    #[Depends('testAssertInvalid105')]
    public function testModule106(): void
    {
        $this->runModuleCommand(
            filename: 'align.106.wasm',
            name: null,
            line: 458,
        );
    }

    #[Depends('testModule106')]
    public function testAssertReturn107(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32_align_switch', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f32', 'value' => '1092616192']],
            line: 802,
        );
    }

    #[Depends('testAssertReturn107')]
    public function testAssertReturn108(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32_align_switch', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f32', 'value' => '1092616192']],
            line: 803,
        );
    }

    #[Depends('testAssertReturn108')]
    public function testAssertReturn109(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32_align_switch', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'f32', 'value' => '1092616192']],
            line: 804,
        );
    }

    #[Depends('testAssertReturn109')]
    public function testAssertReturn110(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32_align_switch', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'f32', 'value' => '1092616192']],
            line: 805,
        );
    }

    #[Depends('testAssertReturn110')]
    public function testAssertReturn111(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64_align_switch', 'args' => [['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'f64', 'value' => '4621819117588971520']],
            line: 807,
        );
    }

    #[Depends('testAssertReturn111')]
    public function testAssertReturn112(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64_align_switch', 'args' => [['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'f64', 'value' => '4621819117588971520']],
            line: 808,
        );
    }

    #[Depends('testAssertReturn112')]
    public function testAssertReturn113(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64_align_switch', 'args' => [['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'f64', 'value' => '4621819117588971520']],
            line: 809,
        );
    }

    #[Depends('testAssertReturn113')]
    public function testAssertReturn114(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64_align_switch', 'args' => [['type' => 'i32', 'value' => '3']]],
            expected: [['type' => 'f64', 'value' => '4621819117588971520']],
            line: 810,
        );
    }

    #[Depends('testAssertReturn114')]
    public function testAssertReturn115(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64_align_switch', 'args' => [['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'f64', 'value' => '4621819117588971520']],
            line: 811,
        );
    }

    #[Depends('testAssertReturn115')]
    public function testAssertReturn116(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32_align_switch', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 813,
        );
    }

    #[Depends('testAssertReturn116')]
    public function testAssertReturn117(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32_align_switch', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 814,
        );
    }

    #[Depends('testAssertReturn117')]
    public function testAssertReturn118(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32_align_switch', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 815,
        );
    }

    #[Depends('testAssertReturn118')]
    public function testAssertReturn119(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32_align_switch', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 816,
        );
    }

    #[Depends('testAssertReturn119')]
    public function testAssertReturn120(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32_align_switch', 'args' => [['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 817,
        );
    }

    #[Depends('testAssertReturn120')]
    public function testAssertReturn121(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32_align_switch', 'args' => [['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 818,
        );
    }

    #[Depends('testAssertReturn121')]
    public function testAssertReturn122(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32_align_switch', 'args' => [['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 819,
        );
    }

    #[Depends('testAssertReturn122')]
    public function testAssertReturn123(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32_align_switch', 'args' => [['type' => 'i32', 'value' => '3'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 820,
        );
    }

    #[Depends('testAssertReturn123')]
    public function testAssertReturn124(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32_align_switch', 'args' => [['type' => 'i32', 'value' => '3'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 821,
        );
    }

    #[Depends('testAssertReturn124')]
    public function testAssertReturn125(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32_align_switch', 'args' => [['type' => 'i32', 'value' => '3'], ['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 822,
        );
    }

    #[Depends('testAssertReturn125')]
    public function testAssertReturn126(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32_align_switch', 'args' => [['type' => 'i32', 'value' => '4'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 823,
        );
    }

    #[Depends('testAssertReturn126')]
    public function testAssertReturn127(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32_align_switch', 'args' => [['type' => 'i32', 'value' => '4'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 824,
        );
    }

    #[Depends('testAssertReturn127')]
    public function testAssertReturn128(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32_align_switch', 'args' => [['type' => 'i32', 'value' => '4'], ['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 825,
        );
    }

    #[Depends('testAssertReturn128')]
    public function testAssertReturn129(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i32_align_switch', 'args' => [['type' => 'i32', 'value' => '4'], ['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 826,
        );
    }

    #[Depends('testAssertReturn129')]
    public function testAssertReturn130(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64_align_switch', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '10']],
            line: 828,
        );
    }

    #[Depends('testAssertReturn130')]
    public function testAssertReturn131(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64_align_switch', 'args' => [['type' => 'i32', 'value' => '0'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '10']],
            line: 829,
        );
    }

    #[Depends('testAssertReturn131')]
    public function testAssertReturn132(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64_align_switch', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '10']],
            line: 830,
        );
    }

    #[Depends('testAssertReturn132')]
    public function testAssertReturn133(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64_align_switch', 'args' => [['type' => 'i32', 'value' => '1'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '10']],
            line: 831,
        );
    }

    #[Depends('testAssertReturn133')]
    public function testAssertReturn134(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64_align_switch', 'args' => [['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '10']],
            line: 832,
        );
    }

    #[Depends('testAssertReturn134')]
    public function testAssertReturn135(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64_align_switch', 'args' => [['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '10']],
            line: 833,
        );
    }

    #[Depends('testAssertReturn135')]
    public function testAssertReturn136(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64_align_switch', 'args' => [['type' => 'i32', 'value' => '2'], ['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i64', 'value' => '10']],
            line: 834,
        );
    }

    #[Depends('testAssertReturn136')]
    public function testAssertReturn137(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64_align_switch', 'args' => [['type' => 'i32', 'value' => '3'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '10']],
            line: 835,
        );
    }

    #[Depends('testAssertReturn137')]
    public function testAssertReturn138(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64_align_switch', 'args' => [['type' => 'i32', 'value' => '3'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '10']],
            line: 836,
        );
    }

    #[Depends('testAssertReturn138')]
    public function testAssertReturn139(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64_align_switch', 'args' => [['type' => 'i32', 'value' => '3'], ['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i64', 'value' => '10']],
            line: 837,
        );
    }

    #[Depends('testAssertReturn139')]
    public function testAssertReturn140(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64_align_switch', 'args' => [['type' => 'i32', 'value' => '4'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '10']],
            line: 838,
        );
    }

    #[Depends('testAssertReturn140')]
    public function testAssertReturn141(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64_align_switch', 'args' => [['type' => 'i32', 'value' => '4'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '10']],
            line: 839,
        );
    }

    #[Depends('testAssertReturn141')]
    public function testAssertReturn142(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64_align_switch', 'args' => [['type' => 'i32', 'value' => '4'], ['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i64', 'value' => '10']],
            line: 840,
        );
    }

    #[Depends('testAssertReturn142')]
    public function testAssertReturn143(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64_align_switch', 'args' => [['type' => 'i32', 'value' => '4'], ['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i64', 'value' => '10']],
            line: 841,
        );
    }

    #[Depends('testAssertReturn143')]
    public function testAssertReturn144(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64_align_switch', 'args' => [['type' => 'i32', 'value' => '5'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '10']],
            line: 842,
        );
    }

    #[Depends('testAssertReturn144')]
    public function testAssertReturn145(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64_align_switch', 'args' => [['type' => 'i32', 'value' => '5'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '10']],
            line: 843,
        );
    }

    #[Depends('testAssertReturn145')]
    public function testAssertReturn146(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64_align_switch', 'args' => [['type' => 'i32', 'value' => '5'], ['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i64', 'value' => '10']],
            line: 844,
        );
    }

    #[Depends('testAssertReturn146')]
    public function testAssertReturn147(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64_align_switch', 'args' => [['type' => 'i32', 'value' => '5'], ['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i64', 'value' => '10']],
            line: 845,
        );
    }

    #[Depends('testAssertReturn147')]
    public function testAssertReturn148(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64_align_switch', 'args' => [['type' => 'i32', 'value' => '6'], ['type' => 'i32', 'value' => '0']]],
            expected: [['type' => 'i64', 'value' => '10']],
            line: 846,
        );
    }

    #[Depends('testAssertReturn148')]
    public function testAssertReturn149(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64_align_switch', 'args' => [['type' => 'i32', 'value' => '6'], ['type' => 'i32', 'value' => '1']]],
            expected: [['type' => 'i64', 'value' => '10']],
            line: 847,
        );
    }

    #[Depends('testAssertReturn149')]
    public function testAssertReturn150(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64_align_switch', 'args' => [['type' => 'i32', 'value' => '6'], ['type' => 'i32', 'value' => '2']]],
            expected: [['type' => 'i64', 'value' => '10']],
            line: 848,
        );
    }

    #[Depends('testAssertReturn150')]
    public function testAssertReturn151(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64_align_switch', 'args' => [['type' => 'i32', 'value' => '6'], ['type' => 'i32', 'value' => '4']]],
            expected: [['type' => 'i64', 'value' => '10']],
            line: 849,
        );
    }

    #[Depends('testAssertReturn151')]
    public function testAssertReturn152(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'i64_align_switch', 'args' => [['type' => 'i32', 'value' => '6'], ['type' => 'i32', 'value' => '8']]],
            expected: [['type' => 'i64', 'value' => '10']],
            line: 850,
        );
    }

    #[Depends('testAssertReturn152')]
    public function testModule153(): void
    {
        $this->runModuleCommand(
            filename: 'align.107.wasm',
            name: null,
            line: 854,
        );
    }

    #[Depends('testModule153')]
    public function testAssertTrap154(): void
    {
        $this->runAssertTrapCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'store', 'args' => [['type' => 'i32', 'value' => '65532'], ['type' => 'i64', 'value' => '18446744073709551615']]],
            text: 'out of bounds memory access',
            line: 864,
        );
    }

    #[Depends('testAssertTrap154')]
    public function testAssertReturn155(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'load', 'args' => [['type' => 'i32', 'value' => '65532']]],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 866,
        );
    }
}
