<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;

final class FloatMiscTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'float_misc.0.wasm',
            name: null,
            line: 17,
        );
    }

    #[Depends('testModule0')]
    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '1066388847'], ['type' => 'f32', 'value' => '789036054']]],
            expected: [['type' => 'f32', 'value' => '1066388847']],
            line: 50,
        );
    }

    #[Depends('testAssertReturn1')]
    public function testAssertReturn2(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '4607738418748954166'], ['type' => 'f64', 'value' => '4458835772027226175']]],
            expected: [['type' => 'f64', 'value' => '4607738418749510135']],
            line: 51,
        );
    }

    #[Depends('testAssertReturn2')]
    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '864026624']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 55,
        );
    }

    #[Depends('testAssertReturn3')]
    public function testAssertReturn4(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '864026625']]],
            expected: [['type' => 'f32', 'value' => '1065353217']],
            line: 56,
        );
    }

    #[Depends('testAssertReturn4')]
    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'f64', 'value' => '4368491638549381120']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 57,
        );
    }

    #[Depends('testAssertReturn5')]
    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'f64', 'value' => '4368491638549381121']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017409']],
            line: 58,
        );
    }

    #[Depends('testAssertReturn6')]
    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '1'], ['type' => 'f32', 'value' => '8388607']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 61,
        );
    }

    #[Depends('testAssertReturn7')]
    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '1'], ['type' => 'f64', 'value' => '4503599627370495']]],
            expected: [['type' => 'f64', 'value' => '4503599627370496']],
            line: 62,
        );
    }

    #[Depends('testAssertReturn8')]
    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '1325400064'], ['type' => 'f32', 'value' => '1149241344']]],
            expected: [['type' => 'f32', 'value' => '1325400068']],
            line: 67,
        );
    }

    #[Depends('testAssertReturn9')]
    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '4890909195324358656'], ['type' => 'f64', 'value' => '4652219514585350144']]],
            expected: [['type' => 'f64', 'value' => '4890909195324358657']],
            line: 68,
        );
    }

    #[Depends('testAssertReturn10')]
    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '9290926031265333248'], ['type' => 'f64', 'value' => '5910']]],
            expected: [['type' => 'f64', 'value' => '9290926031265333247']],
            line: 72,
        );
    }

    #[Depends('testAssertReturn11')]
    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '4845873199050653696'], ['type' => 'f64', 'value' => '4607182463836013682']]],
            expected: [['type' => 'f64', 'value' => '4845873199050653697']],
            line: 75,
        );
    }

    #[Depends('testAssertReturn12')]
    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '4845873199050653697'], ['type' => 'f64', 'value' => '4607182281361063936']]],
            expected: [['type' => 'f64', 'value' => '4845873199050653697']],
            line: 78,
        );
    }

    #[Depends('testAssertReturn13')]
    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '1258291200'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1258291200']],
            line: 81,
        );
    }

    #[Depends('testAssertReturn14')]
    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '1258291201'], ['type' => 'f32', 'value' => '1056964608']]],
            expected: [['type' => 'f32', 'value' => '1258291202']],
            line: 82,
        );
    }

    #[Depends('testAssertReturn15')]
    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '4841369599423283200'], ['type' => 'f64', 'value' => '4602678819172646912']]],
            expected: [['type' => 'f64', 'value' => '4841369599423283200']],
            line: 83,
        );
    }

    #[Depends('testAssertReturn16')]
    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '4841369599423283201'], ['type' => 'f64', 'value' => '4602678819172646912']]],
            expected: [['type' => 'f64', 'value' => '4841369599423283202']],
            line: 84,
        );
    }

    #[Depends('testAssertReturn17')]
    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '4070355885'], ['type' => 'f32', 'value' => '238773414']]],
            expected: [['type' => 'f32', 'value' => '4070355885']],
            line: 87,
        );
    }

    #[Depends('testAssertReturn18')]
    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '1630930834'], ['type' => 'f32', 'value' => '3650472296']]],
            expected: [['type' => 'f32', 'value' => '1630930534']],
            line: 88,
        );
    }

    #[Depends('testAssertReturn19')]
    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '376639884'], ['type' => 'f32', 'value' => '24880479']]],
            expected: [['type' => 'f32', 'value' => '376639884']],
            line: 89,
        );
    }

    #[Depends('testAssertReturn20')]
    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '1393899754'], ['type' => 'f32', 'value' => '3680827526']]],
            expected: [['type' => 'f32', 'value' => '3680827377']],
            line: 90,
        );
    }

    #[Depends('testAssertReturn21')]
    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '947682203'], ['type' => 'f32', 'value' => '1958603311']]],
            expected: [['type' => 'f32', 'value' => '1958603311']],
            line: 91,
        );
    }

    #[Depends('testAssertReturn22')]
    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '2751474943031650218'], ['type' => 'f64', 'value' => '14953834855654151696']]],
            expected: [['type' => 'f64', 'value' => '14953834855654151696']],
            line: 92,
        );
    }

    #[Depends('testAssertReturn23')]
    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '14174076479053295281'], ['type' => 'f64', 'value' => '3779173703388472492']]],
            expected: [['type' => 'f64', 'value' => '14174076479053295281']],
            line: 93,
        );
    }

    #[Depends('testAssertReturn24')]
    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '3940735352412940081'], ['type' => 'f64', 'value' => '13776826739676942972']]],
            expected: [['type' => 'f64', 'value' => '13776826739676942972']],
            line: 94,
        );
    }

    #[Depends('testAssertReturn25')]
    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '6845567588107709194'], ['type' => 'f64', 'value' => '4904758653169279867']]],
            expected: [['type' => 'f64', 'value' => '6845567588107709194']],
            line: 95,
        );
    }

    #[Depends('testAssertReturn26')]
    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '6057047893039655554'], ['type' => 'f64', 'value' => '6381964069811498464']]],
            expected: [['type' => 'f64', 'value' => '6381964069811498464']],
            line: 96,
        );
    }

    #[Depends('testAssertReturn27')]
    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '1670249659'], ['type' => 'f32', 'value' => '3384781876']]],
            expected: [['type' => 'f32', 'value' => '1670249659']],
            line: 99,
        );
    }

    #[Depends('testAssertReturn28')]
    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '692047414'], ['type' => 'f32', 'value' => '2564611463']]],
            expected: [['type' => 'f32', 'value' => '692047414']],
            line: 100,
        );
    }

    #[Depends('testAssertReturn29')]
    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '2862180574'], ['type' => 'f32', 'value' => '2122049802']]],
            expected: [['type' => 'f32', 'value' => '2122049802']],
            line: 101,
        );
    }

    #[Depends('testAssertReturn30')]
    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '2848402951'], ['type' => 'f32', 'value' => '2325576998']]],
            expected: [['type' => 'f32', 'value' => '2848402951']],
            line: 102,
        );
    }

    #[Depends('testAssertReturn31')]
    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '982116028'], ['type' => 'f32', 'value' => '2317187467']]],
            expected: [['type' => 'f32', 'value' => '982116028']],
            line: 103,
        );
    }

    #[Depends('testAssertReturn32')]
    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '5417704807092288842'], ['type' => 'f64', 'value' => '11458115339210975423']]],
            expected: [['type' => 'f64', 'value' => '5417704807092288842']],
            line: 104,
        );
    }

    #[Depends('testAssertReturn33')]
    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '5306888566943064716'], ['type' => 'f64', 'value' => '13560253914302152139']]],
            expected: [['type' => 'f64', 'value' => '5306888566943064716']],
            line: 105,
        );
    }

    #[Depends('testAssertReturn34')]
    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '2791030278657170439'], ['type' => 'f64', 'value' => '9423751710011603955']]],
            expected: [['type' => 'f64', 'value' => '2791030278657170439']],
            line: 106,
        );
    }

    #[Depends('testAssertReturn35')]
    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '14493512931660601393'], ['type' => 'f64', 'value' => '14459238760182946131']]],
            expected: [['type' => 'f64', 'value' => '14493541008051035082']],
            line: 107,
        );
    }

    #[Depends('testAssertReturn36')]
    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '13847269089137787654'], ['type' => 'f64', 'value' => '5913400236268010570']]],
            expected: [['type' => 'f64', 'value' => '5913400236268010570']],
            line: 108,
        );
    }

    #[Depends('testAssertReturn37')]
    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '2231979500'], ['type' => 'f32', 'value' => '711174153']]],
            expected: [['type' => 'f32', 'value' => '711174153']],
            line: 111,
        );
    }

    #[Depends('testAssertReturn38')]
    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '3084976721'], ['type' => 'f32', 'value' => '843077785']]],
            expected: [['type' => 'f32', 'value' => '3084970566']],
            line: 112,
        );
    }

    #[Depends('testAssertReturn39')]
    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '3522127374'], ['type' => 'f32', 'value' => '157500525']]],
            expected: [['type' => 'f32', 'value' => '3522127374']],
            line: 113,
        );
    }

    #[Depends('testAssertReturn40')]
    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '78702389'], ['type' => 'f32', 'value' => '3468399689']]],
            expected: [['type' => 'f32', 'value' => '3468399689']],
            line: 114,
        );
    }

    #[Depends('testAssertReturn41')]
    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '2208228371'], ['type' => 'f32', 'value' => '1870536627']]],
            expected: [['type' => 'f32', 'value' => '1870536627']],
            line: 115,
        );
    }

    #[Depends('testAssertReturn42')]
    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '1111252809067936271'], ['type' => 'f64', 'value' => '18353849863141451174']]],
            expected: [['type' => 'f64', 'value' => '18353849863141451174']],
            line: 116,
        );
    }

    #[Depends('testAssertReturn43')]
    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '16156503866526998353'], ['type' => 'f64', 'value' => '16051628718393451642']]],
            expected: [['type' => 'f64', 'value' => '16156503867159194550']],
            line: 117,
        );
    }

    #[Depends('testAssertReturn44')]
    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '9478779231447112314'], ['type' => 'f64', 'value' => '3336259491488022866']]],
            expected: [['type' => 'f64', 'value' => '3336259491488022866']],
            line: 118,
        );
    }

    #[Depends('testAssertReturn45')]
    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '11541137186853127278'], ['type' => 'f64', 'value' => '735421354967021004']]],
            expected: [['type' => 'f64', 'value' => '11541137186853127278']],
            line: 119,
        );
    }

    #[Depends('testAssertReturn46')]
    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '18181384676953296798'], ['type' => 'f64', 'value' => '8211214354507491487']]],
            expected: [['type' => 'f64', 'value' => '18181384676953296798']],
            line: 120,
        );
    }

    #[Depends('testAssertReturn47')]
    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '17455847474217352892'], ['type' => 'f64', 'value' => '8328504330151758329']]],
            expected: [['type' => 'f64', 'value' => '8328504328029232689']],
            line: 123,
        );
    }

    #[Depends('testAssertReturn48')]
    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '8138029755241725240'], ['type' => 'f64', 'value' => '7967841770626914860']]],
            expected: [['type' => 'f64', 'value' => '8138029755241745167']],
            line: 124,
        );
    }

    #[Depends('testAssertReturn49')]
    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '16644741111433920314'], ['type' => 'f64', 'value' => '7647005019700459394']]],
            expected: [['type' => 'f64', 'value' => '7647005019700459387']],
            line: 125,
        );
    }

    #[Depends('testAssertReturn50')]
    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '6696851869641768443'], ['type' => 'f64', 'value' => '6935821972358342665']]],
            expected: [['type' => 'f64', 'value' => '6935821972358342665']],
            line: 126,
        );
    }

    #[Depends('testAssertReturn51')]
    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '127567346952002978'], ['type' => 'f64', 'value' => '273820416703444795']]],
            expected: [['type' => 'f64', 'value' => '273820416704834831']],
            line: 127,
        );
    }

    #[Depends('testAssertReturn52')]
    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '17221080860858566255'], ['type' => 'f64', 'value' => '18119355194379769652']]],
            expected: [['type' => 'f64', 'value' => '18119355194379769652']],
            line: 130,
        );
    }

    #[Depends('testAssertReturn53')]
    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '5479469458864399218'], ['type' => 'f64', 'value' => '15063363222154738502']]],
            expected: [['type' => 'f64', 'value' => '15063363222154738502']],
            line: 131,
        );
    }

    #[Depends('testAssertReturn54')]
    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '15191393426281101490'], ['type' => 'f64', 'value' => '2705322087145917275']]],
            expected: [['type' => 'f64', 'value' => '15191393426281101490']],
            line: 132,
        );
    }

    #[Depends('testAssertReturn55')]
    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '12404517211283155052'], ['type' => 'f64', 'value' => '15933096090325362723']]],
            expected: [['type' => 'f64', 'value' => '15933096090325362723']],
            line: 133,
        );
    }

    #[Depends('testAssertReturn56')]
    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '12941874353187635000'], ['type' => 'f64', 'value' => '149235811938438489']]],
            expected: [['type' => 'f64', 'value' => '12941874353187635000']],
            line: 134,
        );
    }

    #[Depends('testAssertReturn57')]
    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '2039859408'], ['type' => 'f32', 'value' => '2137384617']]],
            expected: [['type' => 'f32', 'value' => '2137389410']],
            line: 137,
        );
    }

    #[Depends('testAssertReturn58')]
    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '2135652809'], ['type' => 'f32', 'value' => '4113932278']]],
            expected: [['type' => 'f32', 'value' => '2135652798']],
            line: 138,
        );
    }

    #[Depends('testAssertReturn59')]
    public function testAssertReturn60(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '2055837582'], ['type' => 'f32', 'value' => '4281461529']]],
            expected: [['type' => 'f32', 'value' => '4281443917']],
            line: 139,
        );
    }

    #[Depends('testAssertReturn60')]
    public function testAssertReturn61(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '4220448050'], ['type' => 'f32', 'value' => '4286022000']]],
            expected: [['type' => 'f32', 'value' => '4286095178']],
            line: 140,
        );
    }

    #[Depends('testAssertReturn61')]
    public function testAssertReturn62(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '4280642669'], ['type' => 'f32', 'value' => '4269109313']]],
            expected: [['type' => 'f32', 'value' => '4284663933']],
            line: 141,
        );
    }

    #[Depends('testAssertReturn62')]
    public function testAssertReturn63(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '9214390167692528523'], ['type' => 'f64', 'value' => '9025765862177526868']]],
            expected: [['type' => 'f64', 'value' => '9214390167692529673']],
            line: 142,
        );
    }

    #[Depends('testAssertReturn63')]
    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '9218174330906182895'], ['type' => 'f64', 'value' => '9066655639269665468']]],
            expected: [['type' => 'f64', 'value' => '9218174330906813073']],
            line: 143,
        );
    }

    #[Depends('testAssertReturn64')]
    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '18440065048487386960'], ['type' => 'f64', 'value' => '9166530475417861020']]],
            expected: [['type' => 'f64', 'value' => '18440062016830479601']],
            line: 144,
        );
    }

    #[Depends('testAssertReturn65')]
    public function testAssertReturn66(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '18341378616977760125'], ['type' => 'f64', 'value' => '9218376305633483958']]],
            expected: [['type' => 'f64', 'value' => '9218376303911020838']],
            line: 145,
        );
    }

    #[Depends('testAssertReturn66')]
    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '9214484525044672441'], ['type' => 'f64', 'value' => '18297568705700624757']]],
            expected: [['type' => 'f64', 'value' => '9214484525042704878']],
            line: 146,
        );
    }

    #[Depends('testAssertReturn67')]
    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '5932680'], ['type' => 'f32', 'value' => '623']]],
            expected: [['type' => 'f32', 'value' => '5933303']],
            line: 149,
        );
    }

    #[Depends('testAssertReturn68')]
    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '37'], ['type' => 'f32', 'value' => '2147483650']]],
            expected: [['type' => 'f32', 'value' => '35']],
            line: 150,
        );
    }

    #[Depends('testAssertReturn69')]
    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '2147483656'], ['type' => 'f32', 'value' => '3701056']]],
            expected: [['type' => 'f32', 'value' => '3701048']],
            line: 151,
        );
    }

    #[Depends('testAssertReturn70')]
    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '2147483668'], ['type' => 'f32', 'value' => '44113961']]],
            expected: [['type' => 'f32', 'value' => '44113960']],
            line: 152,
        );
    }

    #[Depends('testAssertReturn71')]
    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '453'], ['type' => 'f32', 'value' => '2147507390']]],
            expected: [['type' => 'f32', 'value' => '2147506937']],
            line: 153,
        );
    }

    #[Depends('testAssertReturn72')]
    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '5760669582171681'], ['type' => 'f64', 'value' => '9233067416817195210']]],
            expected: [['type' => 'f64', 'value' => '9227994927942701939']],
            line: 154,
        );
    }

    #[Depends('testAssertReturn73')]
    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '9301019945277718'], ['type' => 'f64', 'value' => '9236877899492518055']]],
            expected: [['type' => 'f64', 'value' => '9231781722239704866']],
            line: 155,
        );
    }

    #[Depends('testAssertReturn74')]
    public function testAssertReturn75(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '9225260466475370890'], ['type' => 'f64', 'value' => '9229416573822848190']]],
            expected: [['type' => 'f64', 'value' => '9231305003443443272']],
            line: 156,
        );
    }

    #[Depends('testAssertReturn75')]
    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '16303139584665809'], ['type' => 'f64', 'value' => '9240639734747285230']]],
            expected: [['type' => 'f64', 'value' => '9227230270086150260']],
            line: 157,
        );
    }

    #[Depends('testAssertReturn76')]
    public function testAssertReturn77(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '9232116546764732939'], ['type' => 'f64', 'value' => '5103597037406761']]],
            expected: [['type' => 'f64', 'value' => '9227012949727326178']],
            line: 158,
        );
    }

    #[Depends('testAssertReturn77')]
    public function testAssertReturn78(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '2139095038'], ['type' => 'f32', 'value' => '1937768448']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 162,
        );
    }

    #[Depends('testAssertReturn78')]
    public function testAssertReturn79(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '9218868437227405310'], ['type' => 'f64', 'value' => '8980177656976769024']]],
            expected: [['type' => 'f64', 'value' => '9218868437227405311']],
            line: 163,
        );
    }

    #[Depends('testAssertReturn79')]
    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '1073741824'], ['type' => 'f32', 'value' => '1073741824']]],
            expected: [['type' => 'f32', 'value' => '1082130432']],
            line: 166,
        );
    }

    #[Depends('testAssertReturn80')]
    public function testAssertReturn81(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '4611686018427387904'], ['type' => 'f64', 'value' => '4611686018427387904']]],
            expected: [['type' => 'f64', 'value' => '4616189618054758400']],
            line: 167,
        );
    }

    #[Depends('testAssertReturn81')]
    public function testAssertReturn82(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1929379839']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 170,
        );
    }

    #[Depends('testAssertReturn82')]
    public function testAssertReturn83(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.add', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1929379840']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 171,
        );
    }

    #[Depends('testAssertReturn83')]
    public function testAssertReturn84(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '9218868437227405311'], ['type' => 'f64', 'value' => '8975674057349398527']]],
            expected: [['type' => 'f64', 'value' => '9218868437227405311']],
            line: 172,
        );
    }

    #[Depends('testAssertReturn84')]
    public function testAssertReturn85(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.add', 'args' => [['type' => 'f64', 'value' => '9218868437227405311'], ['type' => 'f64', 'value' => '8975674057349398528']]],
            expected: [['type' => 'f64', 'value' => '9218868437227405312']],
            line: 173,
        );
    }

    #[Depends('testAssertReturn85')]
    public function testAssertReturn86(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sub', 'args' => [['type' => 'f32', 'value' => '1199570944'], ['type' => 'f32', 'value' => '754974720']]],
            expected: [['type' => 'f32', 'value' => '1199570944']],
            line: 177,
        );
    }

    #[Depends('testAssertReturn86')]
    public function testAssertReturn87(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '4679240012837945344'], ['type' => 'f64', 'value' => '4440549232587309056']]],
            expected: [['type' => 'f64', 'value' => '4679240012837945343']],
            line: 178,
        );
    }

    #[Depends('testAssertReturn87')]
    public function testAssertReturn88(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sub', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '855638016']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 182,
        );
    }

    #[Depends('testAssertReturn88')]
    public function testAssertReturn89(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sub', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '855638017']]],
            expected: [['type' => 'f32', 'value' => '1065353215']],
            line: 183,
        );
    }

    #[Depends('testAssertReturn89')]
    public function testAssertReturn90(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'f64', 'value' => '4363988038922010624']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 184,
        );
    }

    #[Depends('testAssertReturn90')]
    public function testAssertReturn91(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'f64', 'value' => '4363988038922010625']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017407']],
            line: 185,
        );
    }

    #[Depends('testAssertReturn91')]
    public function testAssertReturn92(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sub', 'args' => [['type' => 'f32', 'value' => '183964211'], ['type' => 'f32', 'value' => '4211807167']]],
            expected: [['type' => 'f32', 'value' => '2064323519']],
            line: 188,
        );
    }

    #[Depends('testAssertReturn92')]
    public function testAssertReturn93(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sub', 'args' => [['type' => 'f32', 'value' => '4213323727'], ['type' => 'f32', 'value' => '3575761746']]],
            expected: [['type' => 'f32', 'value' => '4213323727']],
            line: 189,
        );
    }

    #[Depends('testAssertReturn93')]
    public function testAssertReturn94(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sub', 'args' => [['type' => 'f32', 'value' => '1069169566'], ['type' => 'f32', 'value' => '2530290313']]],
            expected: [['type' => 'f32', 'value' => '1069169566']],
            line: 190,
        );
    }

    #[Depends('testAssertReturn94')]
    public function testAssertReturn95(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sub', 'args' => [['type' => 'f32', 'value' => '88711906'], ['type' => 'f32', 'value' => '431212897']]],
            expected: [['type' => 'f32', 'value' => '2578696545']],
            line: 191,
        );
    }

    #[Depends('testAssertReturn95')]
    public function testAssertReturn96(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sub', 'args' => [['type' => 'f32', 'value' => '919562194'], ['type' => 'f32', 'value' => '2319656354']]],
            expected: [['type' => 'f32', 'value' => '919562194']],
            line: 192,
        );
    }

    #[Depends('testAssertReturn96')]
    public function testAssertReturn97(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '12332465020357998661'], ['type' => 'f64', 'value' => '9766989582560416510']]],
            expected: [['type' => 'f64', 'value' => '12332465020357998661']],
            line: 193,
        );
    }

    #[Depends('testAssertReturn97')]
    public function testAssertReturn98(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '16318450733361321773'], ['type' => 'f64', 'value' => '13120762196173477233']]],
            expected: [['type' => 'f64', 'value' => '16318450733361321773']],
            line: 194,
        );
    }

    #[Depends('testAssertReturn98')]
    public function testAssertReturn99(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '2534186520144737456'], ['type' => 'f64', 'value' => '10065159679028096147']]],
            expected: [['type' => 'f64', 'value' => '2534186520144737456']],
            line: 195,
        );
    }

    #[Depends('testAssertReturn99')]
    public function testAssertReturn100(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '81253721542311597'], ['type' => 'f64', 'value' => '14524181566355681001']]],
            expected: [['type' => 'f64', 'value' => '5300809529500905193']],
            line: 196,
        );
    }

    #[Depends('testAssertReturn100')]
    public function testAssertReturn101(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '13189545483472981053'], ['type' => 'f64', 'value' => '11407195172005604952']]],
            expected: [['type' => 'f64', 'value' => '13189545483472981053']],
            line: 197,
        );
    }

    #[Depends('testAssertReturn101')]
    public function testAssertReturn102(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sub', 'args' => [['type' => 'f32', 'value' => '4122014001'], ['type' => 'f32', 'value' => '4158487026']]],
            expected: [['type' => 'f32', 'value' => '2010278623']],
            line: 200,
        );
    }

    #[Depends('testAssertReturn102')]
    public function testAssertReturn103(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sub', 'args' => [['type' => 'f32', 'value' => '4130431355'], ['type' => 'f32', 'value' => '1119299749']]],
            expected: [['type' => 'f32', 'value' => '4130431355']],
            line: 201,
        );
    }

    #[Depends('testAssertReturn103')]
    public function testAssertReturn104(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sub', 'args' => [['type' => 'f32', 'value' => '2517909066'], ['type' => 'f32', 'value' => '864524238']]],
            expected: [['type' => 'f32', 'value' => '3012007886']],
            line: 202,
        );
    }

    #[Depends('testAssertReturn104')]
    public function testAssertReturn105(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sub', 'args' => [['type' => 'f32', 'value' => '2573484334'], ['type' => 'f32', 'value' => '3114628459']]],
            expected: [['type' => 'f32', 'value' => '967144811']],
            line: 203,
        );
    }

    #[Depends('testAssertReturn105')]
    public function testAssertReturn106(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sub', 'args' => [['type' => 'f32', 'value' => '4044667730'], ['type' => 'f32', 'value' => '576942556']]],
            expected: [['type' => 'f32', 'value' => '4044667730']],
            line: 204,
        );
    }

    #[Depends('testAssertReturn106')]
    public function testAssertReturn107(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '14742371419310964805'], ['type' => 'f64', 'value' => '17888404506408184249']]],
            expected: [['type' => 'f64', 'value' => '8665032469553408441']],
            line: 205,
        );
    }

    #[Depends('testAssertReturn107')]
    public function testAssertReturn108(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '2953146626865245854'], ['type' => 'f64', 'value' => '2577681730975527916']]],
            expected: [['type' => 'f64', 'value' => '2953146626865245854']],
            line: 206,
        );
    }

    #[Depends('testAssertReturn108')]
    public function testAssertReturn109(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '12932364735331397407'], ['type' => 'f64', 'value' => '2320782934320318207']]],
            expected: [['type' => 'f64', 'value' => '12932364735331397407']],
            line: 207,
        );
    }

    #[Depends('testAssertReturn109')]
    public function testAssertReturn110(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '9365060414983047910'], ['type' => 'f64', 'value' => '12353777816259046974']]],
            expected: [['type' => 'f64', 'value' => '3130405779404271166']],
            line: 208,
        );
    }

    #[Depends('testAssertReturn110')]
    public function testAssertReturn111(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '14336992446210099104'], ['type' => 'f64', 'value' => '5379485476305549444']]],
            expected: [['type' => 'f64', 'value' => '14602857513160325252']],
            line: 209,
        );
    }

    #[Depends('testAssertReturn111')]
    public function testAssertReturn112(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sub', 'args' => [['type' => 'f32', 'value' => '1869943590'], ['type' => 'f32', 'value' => '943887556']]],
            expected: [['type' => 'f32', 'value' => '1869943590']],
            line: 212,
        );
    }

    #[Depends('testAssertReturn112')]
    public function testAssertReturn113(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sub', 'args' => [['type' => 'f32', 'value' => '3372906046'], ['type' => 'f32', 'value' => '2919590399']]],
            expected: [['type' => 'f32', 'value' => '3372906046']],
            line: 213,
        );
    }

    #[Depends('testAssertReturn113')]
    public function testAssertReturn114(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sub', 'args' => [['type' => 'f32', 'value' => '2912495853'], ['type' => 'f32', 'value' => '2745492671']]],
            expected: [['type' => 'f32', 'value' => '2912495843']],
            line: 214,
        );
    }

    #[Depends('testAssertReturn114')]
    public function testAssertReturn115(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sub', 'args' => [['type' => 'f32', 'value' => '3096029999'], ['type' => 'f32', 'value' => '957859028']]],
            expected: [['type' => 'f32', 'value' => '3109853804']],
            line: 215,
        );
    }

    #[Depends('testAssertReturn115')]
    public function testAssertReturn116(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sub', 'args' => [['type' => 'f32', 'value' => '2939165019'], ['type' => 'f32', 'value' => '2346559691']]],
            expected: [['type' => 'f32', 'value' => '2939165019']],
            line: 216,
        );
    }

    #[Depends('testAssertReturn116')]
    public function testAssertReturn117(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '13126685627069188368'], ['type' => 'f64', 'value' => '17084005755352353256']]],
            expected: [['type' => 'f64', 'value' => '7860633718497577448']],
            line: 217,
        );
    }

    #[Depends('testAssertReturn117')]
    public function testAssertReturn118(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '17250804263238954355'], ['type' => 'f64', 'value' => '17897322818375888829']]],
            expected: [['type' => 'f64', 'value' => '8673950781521113021']],
            line: 218,
        );
    }

    #[Depends('testAssertReturn118')]
    public function testAssertReturn119(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '1024624387795162319'], ['type' => 'f64', 'value' => '5422801516870904507']]],
            expected: [['type' => 'f64', 'value' => '14646173553725680315']],
            line: 219,
        );
    }

    #[Depends('testAssertReturn119')]
    public function testAssertReturn120(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '11250563508203208480'], ['type' => 'f64', 'value' => '2160870138446053709']]],
            expected: [['type' => 'f64', 'value' => '11384242175310282886']],
            line: 220,
        );
    }

    #[Depends('testAssertReturn120')]
    public function testAssertReturn121(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '11315355526970152728'], ['type' => 'f64', 'value' => '13767999508795332779']]],
            expected: [['type' => 'f64', 'value' => '4544627471940556971']],
            line: 221,
        );
    }

    #[Depends('testAssertReturn121')]
    public function testAssertReturn122(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '4259315722107263852'], ['type' => 'f64', 'value' => '4089445689175118070']]],
            expected: [['type' => 'f64', 'value' => '4259315722107229795']],
            line: 224,
        );
    }

    #[Depends('testAssertReturn122')]
    public function testAssertReturn123(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '188121565440651108'], ['type' => 'f64', 'value' => '62416789530785743']]],
            expected: [['type' => 'f64', 'value' => '188121565409457039']],
            line: 225,
        );
    }

    #[Depends('testAssertReturn123')]
    public function testAssertReturn124(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '3467770562990504390'], ['type' => 'f64', 'value' => '3710644584044210353']]],
            expected: [['type' => 'f64', 'value' => '12934016620898986161']],
            line: 226,
        );
    }

    #[Depends('testAssertReturn124')]
    public function testAssertReturn125(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '13655868372788825570'], ['type' => 'f64', 'value' => '13522732182992332383']]],
            expected: [['type' => 'f64', 'value' => '13655868372781906121']],
            line: 227,
        );
    }

    #[Depends('testAssertReturn125')]
    public function testAssertReturn126(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '4496158230847685281'], ['type' => 'f64', 'value' => '4595312328816348364']]],
            expected: [['type' => 'f64', 'value' => '13818684364224065885']],
            line: 228,
        );
    }

    #[Depends('testAssertReturn126')]
    public function testAssertReturn127(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '10165048318361601487'], ['type' => 'f64', 'value' => '10384658282813060399']]],
            expected: [['type' => 'f64', 'value' => '1161286245958284573']],
            line: 231,
        );
    }

    #[Depends('testAssertReturn127')]
    public function testAssertReturn128(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '13982858477006823824'], ['type' => 'f64', 'value' => '6264462250080870922']]],
            expected: [['type' => 'f64', 'value' => '15487834286935646730']],
            line: 232,
        );
    }

    #[Depends('testAssertReturn128')]
    public function testAssertReturn129(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '5124509539958121241'], ['type' => 'f64', 'value' => '1953255029772502995']]],
            expected: [['type' => 'f64', 'value' => '5124509539958121241']],
            line: 233,
        );
    }

    #[Depends('testAssertReturn129')]
    public function testAssertReturn130(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '2408125051325635052'], ['type' => 'f64', 'value' => '10707017964771367822']]],
            expected: [['type' => 'f64', 'value' => '2408125051325635052']],
            line: 234,
        );
    }

    #[Depends('testAssertReturn130')]
    public function testAssertReturn131(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '4352135458168599028'], ['type' => 'f64', 'value' => '1826599214642193119']]],
            expected: [['type' => 'f64', 'value' => '4352135458168599028']],
            line: 235,
        );
    }

    #[Depends('testAssertReturn131')]
    public function testAssertReturn132(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sub', 'args' => [['type' => 'f32', 'value' => '1102651427'], ['type' => 'f32', 'value' => '1078530011']]],
            expected: [['type' => 'f32', 'value' => '1101004328']],
            line: 239,
        );
    }

    #[Depends('testAssertReturn132')]
    public function testAssertReturn133(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '4627206743602008890'], ['type' => 'f64', 'value' => '4614256656552045848']]],
            expected: [['type' => 'f64', 'value' => '4626322463883005335']],
            line: 240,
        );
    }

    #[Depends('testAssertReturn133')]
    public function testAssertReturn134(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sub', 'args' => [['type' => 'f32', 'value' => '1245125372'], ['type' => 'f32', 'value' => '1245125368']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 243,
        );
    }

    #[Depends('testAssertReturn134')]
    public function testAssertReturn135(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sub', 'args' => [['type' => 'f32', 'value' => '1240736760'], ['type' => 'f32', 'value' => '1240736728']]],
            expected: [['type' => 'f32', 'value' => '1082130432']],
            line: 244,
        );
    }

    #[Depends('testAssertReturn135')]
    public function testAssertReturn136(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sub', 'args' => [['type' => 'f32', 'value' => '1240736760'], ['type' => 'f32', 'value' => '1240736712']]],
            expected: [['type' => 'f32', 'value' => '1086324736']],
            line: 245,
        );
    }

    #[Depends('testAssertReturn136')]
    public function testAssertReturn137(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sub', 'args' => [['type' => 'f32', 'value' => '1220759616'], ['type' => 'f32', 'value' => '1220759584']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 246,
        );
    }

    #[Depends('testAssertReturn137')]
    public function testAssertReturn138(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sub', 'args' => [['type' => 'f32', 'value' => '1220759616'], ['type' => 'f32', 'value' => '1220759552']]],
            expected: [['type' => 'f32', 'value' => '1073741824']],
            line: 247,
        );
    }

    #[Depends('testAssertReturn138')]
    public function testAssertReturn139(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '4838362400168542206'], ['type' => 'f64', 'value' => '4838362400168542204']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 248,
        );
    }

    #[Depends('testAssertReturn139')]
    public function testAssertReturn140(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '4835858800541171708'], ['type' => 'f64', 'value' => '4835858800541171692']]],
            expected: [['type' => 'f64', 'value' => '4616189618054758400']],
            line: 249,
        );
    }

    #[Depends('testAssertReturn140')]
    public function testAssertReturn141(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '4835858800541171708'], ['type' => 'f64', 'value' => '4835858800541171684']]],
            expected: [['type' => 'f64', 'value' => '4618441417868443648']],
            line: 250,
        );
    }

    #[Depends('testAssertReturn141')]
    public function testAssertReturn142(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '4825251601286430752'], ['type' => 'f64', 'value' => '4825251601286430736']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 251,
        );
    }

    #[Depends('testAssertReturn142')]
    public function testAssertReturn143(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '4825251601286430752'], ['type' => 'f64', 'value' => '4825251601286430720']]],
            expected: [['type' => 'f64', 'value' => '4611686018427387904']],
            line: 252,
        );
    }

    #[Depends('testAssertReturn143')]
    public function testAssertReturn144(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sub', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '8388607']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 255,
        );
    }

    #[Depends('testAssertReturn144')]
    public function testAssertReturn145(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '4503599627370496'], ['type' => 'f64', 'value' => '4503599627370495']]],
            expected: [['type' => 'f64', 'value' => '1']],
            line: 256,
        );
    }

    #[Depends('testAssertReturn145')]
    public function testAssertReturn146(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sub', 'args' => [['type' => 'f32', 'value' => '1065353217'], ['type' => 'f32', 'value' => '1065353215']]],
            expected: [['type' => 'f32', 'value' => '876609536']],
            line: 259,
        );
    }

    #[Depends('testAssertReturn146')]
    public function testAssertReturn147(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sub', 'args' => [['type' => 'f32', 'value' => '1065353217'], ['type' => 'f32', 'value' => '1065353216']]],
            expected: [['type' => 'f32', 'value' => '872415232']],
            line: 260,
        );
    }

    #[Depends('testAssertReturn147')]
    public function testAssertReturn148(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sub', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1065353215']]],
            expected: [['type' => 'f32', 'value' => '864026624']],
            line: 261,
        );
    }

    #[Depends('testAssertReturn148')]
    public function testAssertReturn149(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '4607182418800017409'], ['type' => 'f64', 'value' => '4607182418800017407']]],
            expected: [['type' => 'f64', 'value' => '4375247037990436864']],
            line: 262,
        );
    }

    #[Depends('testAssertReturn149')]
    public function testAssertReturn150(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '4607182418800017409'], ['type' => 'f64', 'value' => '4607182418800017408']]],
            expected: [['type' => 'f64', 'value' => '4372995238176751616']],
            line: 263,
        );
    }

    #[Depends('testAssertReturn150')]
    public function testAssertReturn151(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'f64', 'value' => '4607182418800017407']]],
            expected: [['type' => 'f64', 'value' => '4368491638549381120']],
            line: 264,
        );
    }

    #[Depends('testAssertReturn151')]
    public function testAssertReturn152(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sub', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1929379839']]],
            expected: [['type' => 'f32', 'value' => '2139095039']],
            line: 268,
        );
    }

    #[Depends('testAssertReturn152')]
    public function testAssertReturn153(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sub', 'args' => [['type' => 'f32', 'value' => '2139095039'], ['type' => 'f32', 'value' => '1929379840']]],
            expected: [['type' => 'f32', 'value' => '2139095038']],
            line: 269,
        );
    }

    #[Depends('testAssertReturn153')]
    public function testAssertReturn154(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '9218868437227405311'], ['type' => 'f64', 'value' => '8975674057349398527']]],
            expected: [['type' => 'f64', 'value' => '9218868437227405311']],
            line: 270,
        );
    }

    #[Depends('testAssertReturn154')]
    public function testAssertReturn155(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sub', 'args' => [['type' => 'f64', 'value' => '9218868437227405311'], ['type' => 'f64', 'value' => '8975674057349398528']]],
            expected: [['type' => 'f64', 'value' => '9218868437227405310']],
            line: 271,
        );
    }

    #[Depends('testAssertReturn155')]
    public function testAssertReturn156(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.mul', 'args' => [['type' => 'f32', 'value' => '1482907561'], ['type' => 'f32', 'value' => '1482907561']]],
            expected: [['type' => 'f32', 'value' => '1900671689']],
            line: 274,
        );
    }

    #[Depends('testAssertReturn156')]
    public function testAssertReturn157(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.mul', 'args' => [['type' => 'f32', 'value' => '1621981420'], ['type' => 'f32', 'value' => '1621981420']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 275,
        );
    }

    #[Depends('testAssertReturn157')]
    public function testAssertReturn158(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.mul', 'args' => [['type' => 'f32', 'value' => '1761892689'], ['type' => 'f32', 'value' => '1761892689']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 276,
        );
    }

    #[Depends('testAssertReturn158')]
    public function testAssertReturn159(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '4831355200913801216'], ['type' => 'f64', 'value' => '4831355200913801216']]],
            expected: [['type' => 'f64', 'value' => '5055640609639927018']],
            line: 277,
        );
    }

    #[Depends('testAssertReturn159')]
    public function testAssertReturn160(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '4906019910204099648'], ['type' => 'f64', 'value' => '4906019910204099648']]],
            expected: [['type' => 'f64', 'value' => '5205425776111082661']],
            line: 278,
        );
    }

    #[Depends('testAssertReturn160')]
    public function testAssertReturn161(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '4981134201117475473'], ['type' => 'f64', 'value' => '4981134201117475473']]],
            expected: [['type' => 'f64', 'value' => '5355091182177117339']],
            line: 279,
        );
    }

    #[Depends('testAssertReturn161')]
    public function testAssertReturn162(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.mul', 'args' => [['type' => 'f32', 'value' => '1323067183'], ['type' => 'f32', 'value' => '1351920719']]],
            expected: [['type' => 'f32', 'value' => '1610612737']],
            line: 284,
        );
    }

    #[Depends('testAssertReturn162')]
    public function testAssertReturn163(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '4745541551160033280'], ['type' => 'f64', 'value' => '4761032175258435584']]],
            expected: [['type' => 'f64', 'value' => '4899916394579099649']],
            line: 285,
        );
    }

    #[Depends('testAssertReturn163')]
    public function testAssertReturn164(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.mul', 'args' => [['type' => 'f32', 'value' => '1117401907'], ['type' => 'f32', 'value' => '1146388480']]],
            expected: [['type' => 'f32', 'value' => '1199570688']],
            line: 289,
        );
    }

    #[Depends('testAssertReturn164')]
    public function testAssertReturn165(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '4635125847112967782'], ['type' => 'f64', 'value' => '4650687894887858176']]],
            expected: [['type' => 'f64', 'value' => '4679239875398991871']],
            line: 290,
        );
    }

    #[Depends('testAssertReturn165')]
    public function testAssertReturn166(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.mul', 'args' => [['type' => 'f32', 'value' => '3725225879'], ['type' => 'f32', 'value' => '767181884']]],
            expected: [['type' => 'f32', 'value' => '3427365876']],
            line: 293,
        );
    }

    #[Depends('testAssertReturn166')]
    public function testAssertReturn167(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.mul', 'args' => [['type' => 'f32', 'value' => '4071298289'], ['type' => 'f32', 'value' => '2363594761']]],
            expected: [['type' => 'f32', 'value' => '1075233538']],
            line: 294,
        );
    }

    #[Depends('testAssertReturn167')]
    public function testAssertReturn168(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.mul', 'args' => [['type' => 'f32', 'value' => '3990403914'], ['type' => 'f32', 'value' => '2406636213']]],
            expected: [['type' => 'f32', 'value' => '1036856791']],
            line: 295,
        );
    }

    #[Depends('testAssertReturn168')]
    public function testAssertReturn169(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.mul', 'args' => [['type' => 'f32', 'value' => '3876262739'], ['type' => 'f32', 'value' => '2590162616']]],
            expected: [['type' => 'f32', 'value' => '1106664791']],
            line: 296,
        );
    }

    #[Depends('testAssertReturn169')]
    public function testAssertReturn170(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.mul', 'args' => [['type' => 'f32', 'value' => '1513973689'], ['type' => 'f32', 'value' => '1110852822']]],
            expected: [['type' => 'f32', 'value' => '1560730283']],
            line: 297,
        );
    }

    #[Depends('testAssertReturn170')]
    public function testAssertReturn171(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '15745248579468343268'], ['type' => 'f64', 'value' => '8867411559652116184']]],
            expected: [['type' => 'f64', 'value' => '18442240474082181120']],
            line: 298,
        );
    }

    #[Depends('testAssertReturn171')]
    public function testAssertReturn172(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '9393595877903301723'], ['type' => 'f64', 'value' => '12847704090045979814']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 299,
        );
    }

    #[Depends('testAssertReturn172')]
    public function testAssertReturn173(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '7339743909496900438'], ['type' => 'f64', 'value' => '14312273837817528234']]],
            expected: [['type' => 'f64', 'value' => '17044856006279008467']],
            line: 300,
        );
    }

    #[Depends('testAssertReturn173')]
    public function testAssertReturn174(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '12422633289194844785'], ['type' => 'f64', 'value' => '7233496047441461849']]],
            expected: [['type' => 'f64', 'value' => '15049217706304651865']],
            line: 301,
        );
    }

    #[Depends('testAssertReturn174')]
    public function testAssertReturn175(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '8188526721198436258'], ['type' => 'f64', 'value' => '745378815681991665']]],
            expected: [['type' => 'f64', 'value' => '4327221634240578200']],
            line: 302,
        );
    }

    #[Depends('testAssertReturn175')]
    public function testAssertReturn176(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.mul', 'args' => [['type' => 'f32', 'value' => '2468326353'], ['type' => 'f32', 'value' => '3984723636']]],
            expected: [['type' => 'f32', 'value' => '1092762840']],
            line: 305,
        );
    }

    #[Depends('testAssertReturn176')]
    public function testAssertReturn177(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.mul', 'args' => [['type' => 'f32', 'value' => '1680245441'], ['type' => 'f32', 'value' => '1228341789']]],
            expected: [['type' => 'f32', 'value' => '1844318640']],
            line: 306,
        );
    }

    #[Depends('testAssertReturn177')]
    public function testAssertReturn178(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.mul', 'args' => [['type' => 'f32', 'value' => '2945969408'], ['type' => 'f32', 'value' => '3840981390']]],
            expected: [['type' => 'f32', 'value' => '1427037263']],
            line: 307,
        );
    }

    #[Depends('testAssertReturn178')]
    public function testAssertReturn179(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.mul', 'args' => [['type' => 'f32', 'value' => '1631446143'], ['type' => 'f32', 'value' => '3340593865']]],
            expected: [['type' => 'f32', 'value' => '3907618991']],
            line: 308,
        );
    }

    #[Depends('testAssertReturn179')]
    public function testAssertReturn180(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.mul', 'args' => [['type' => 'f32', 'value' => '1321841569'], ['type' => 'f32', 'value' => '3771977928']]],
            expected: [['type' => 'f32', 'value' => '4029080461']],
            line: 309,
        );
    }

    #[Depends('testAssertReturn180')]
    public function testAssertReturn181(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '10956034376207055635'], ['type' => 'f64', 'value' => '3195464683520095288']]],
            expected: [['type' => 'f64', 'value' => '9544600684599159351']],
            line: 310,
        );
    }

    #[Depends('testAssertReturn181')]
    public function testAssertReturn182(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '3366372084365197849'], ['type' => 'f64', 'value' => '10971437597834234015']]],
            expected: [['type' => 'f64', 'value' => '9730951521726442211']],
            line: 311,
        );
    }

    #[Depends('testAssertReturn182')]
    public function testAssertReturn183(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '15316253934569525376'], ['type' => 'f64', 'value' => '17593766689751523793']]],
            expected: [['type' => 'f64', 'value' => '9218868437227405312']],
            line: 312,
        );
    }

    #[Depends('testAssertReturn183')]
    public function testAssertReturn184(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '8873430008942894499'], ['type' => 'f64', 'value' => '2630310872370005737']]],
            expected: [['type' => 'f64', 'value' => '6896620497836925834']],
            line: 313,
        );
    }

    #[Depends('testAssertReturn184')]
    public function testAssertReturn185(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '6138390736122864607'], ['type' => 'f64', 'value' => '14591737303103877464']]],
            expected: [['type' => 'f64', 'value' => '16122953269734234204']],
            line: 314,
        );
    }

    #[Depends('testAssertReturn185')]
    public function testAssertReturn186(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.mul', 'args' => [['type' => 'f32', 'value' => '3603447621'], ['type' => 'f32', 'value' => '4012809012']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 317,
        );
    }

    #[Depends('testAssertReturn186')]
    public function testAssertReturn187(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.mul', 'args' => [['type' => 'f32', 'value' => '3192278970'], ['type' => 'f32', 'value' => '242309673']]],
            expected: [['type' => 'f32', 'value' => '2369451750']],
            line: 318,
        );
    }

    #[Depends('testAssertReturn187')]
    public function testAssertReturn188(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.mul', 'args' => [['type' => 'f32', 'value' => '3060150317'], ['type' => 'f32', 'value' => '1953896717']]],
            expected: [['type' => 'f32', 'value' => '3948759250']],
            line: 319,
        );
    }

    #[Depends('testAssertReturn188')]
    public function testAssertReturn189(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.mul', 'args' => [['type' => 'f32', 'value' => '3685735869'], ['type' => 'f32', 'value' => '265571119']]],
            expected: [['type' => 'f32', 'value' => '2886850375']],
            line: 320,
        );
    }

    #[Depends('testAssertReturn189')]
    public function testAssertReturn190(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.mul', 'args' => [['type' => 'f32', 'value' => '3355295625'], ['type' => 'f32', 'value' => '69023757']]],
            expected: [['type' => 'f32', 'value' => '2359023110']],
            line: 321,
        );
    }

    #[Depends('testAssertReturn190')]
    public function testAssertReturn191(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '11598370094301102699'], ['type' => 'f64', 'value' => '15783697741936198553']]],
            expected: [['type' => 'f64', 'value' => '4328598597203697163']],
            line: 322,
        );
    }

    #[Depends('testAssertReturn191')]
    public function testAssertReturn192(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '6760137556672200005'], ['type' => 'f64', 'value' => '10390971429121674926']]],
            expected: [['type' => 'f64', 'value' => '12543987340819631453']],
            line: 323,
        );
    }

    #[Depends('testAssertReturn192')]
    public function testAssertReturn193(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '14608361260346079328'], ['type' => 'f64', 'value' => '6227029768418337647']]],
            expected: [['type' => 'f64', 'value' => '16228420234814429284']],
            line: 324,
        );
    }

    #[Depends('testAssertReturn193')]
    public function testAssertReturn194(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '8069908676175581646'], ['type' => 'f64', 'value' => '15517844864458283108']]],
            expected: [['type' => 'f64', 'value' => '18442240474082181120']],
            line: 325,
        );
    }

    #[Depends('testAssertReturn194')]
    public function testAssertReturn195(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '4973816491418843402'], ['type' => 'f64', 'value' => '4922606816281832528']]],
            expected: [['type' => 'f64', 'value' => '5289311430451755328']],
            line: 326,
        );
    }

    #[Depends('testAssertReturn195')]
    public function testAssertReturn196(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '3075846375446710711'], ['type' => 'f64', 'value' => '2019524319895558702']]],
            expected: [['type' => 'f64', 'value' => '488220554609224151']],
            line: 329,
        );
    }

    #[Depends('testAssertReturn196')]
    public function testAssertReturn197(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '13792389967993824121'], ['type' => 'f64', 'value' => '7865224186729676301']]],
            expected: [['type' => 'f64', 'value' => '17051039770050770421']],
            line: 330,
        );
    }

    #[Depends('testAssertReturn197')]
    public function testAssertReturn198(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '15483491341737357200'], ['type' => 'f64', 'value' => '10898188329492193507']]],
            expected: [['type' => 'f64', 'value' => '3327855557076626973']],
            line: 331,
        );
    }

    #[Depends('testAssertReturn198')]
    public function testAssertReturn199(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '8100886621587996114'], ['type' => 'f64', 'value' => '4881220253517731398']]],
            expected: [['type' => 'f64', 'value' => '8375006889399652877']],
            line: 332,
        );
    }

    #[Depends('testAssertReturn199')]
    public function testAssertReturn200(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '12589892576446671178'], ['type' => 'f64', 'value' => '8646729507413822745']]],
            expected: [['type' => 'f64', 'value' => '16629483498509877989']],
            line: 333,
        );
    }

    #[Depends('testAssertReturn200')]
    public function testAssertReturn201(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '1913383041739811140'], ['type' => 'f64', 'value' => '2696786534754768330']]],
            expected: [['type' => 'f64', 'value' => '3776602816350777']],
            line: 336,
        );
    }

    #[Depends('testAssertReturn201')]
    public function testAssertReturn202(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '13576886274997223712'], ['type' => 'f64', 'value' => '9480836654241272360']]],
            expected: [['type' => 'f64', 'value' => '4406081533924885']],
            line: 337,
        );
    }

    #[Depends('testAssertReturn202')]
    public function testAssertReturn203(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '11636123185307544831'], ['type' => 'f64', 'value' => '11418839304735837198']]],
            expected: [['type' => 'f64', 'value' => '2919536087652621']],
            line: 338,
        );
    }

    #[Depends('testAssertReturn203')]
    public function testAssertReturn204(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '10357270161024523488'], ['type' => 'f64', 'value' => '3460198093814186274']]],
            expected: [['type' => 'f64', 'value' => '9223701543089011575']],
            line: 339,
        );
    }

    #[Depends('testAssertReturn204')]
    public function testAssertReturn205(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '11506848031881565957'], ['type' => 'f64', 'value' => '11547514064126512393']]],
            expected: [['type' => 'f64', 'value' => '2474372522531115']],
            line: 340,
        );
    }

    #[Depends('testAssertReturn205')]
    public function testAssertReturn206(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '8446730755803745435'], ['type' => 'f64', 'value' => '640105622936255012']]],
            expected: [['type' => 'f64', 'value' => '4479981512316931443']],
            line: 343,
        );
    }

    #[Depends('testAssertReturn206')]
    public function testAssertReturn207(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '4578331547514318947'], ['type' => 'f64', 'value' => '3937894457345907544']]],
            expected: [['type' => 'f64', 'value' => '3909603143436010489']],
            line: 344,
        );
    }

    #[Depends('testAssertReturn207')]
    public function testAssertReturn208(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '13839181621982597923'], ['type' => 'f64', 'value' => '4426983905639375259']]],
            expected: [['type' => 'f64', 'value' => '13658985409477228135']],
            line: 345,
        );
    }

    #[Depends('testAssertReturn208')]
    public function testAssertReturn209(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '2931365221683549507'], ['type' => 'f64', 'value' => '3687257801017498184']]],
            expected: [['type' => 'f64', 'value' => '2011503789135851990']],
            line: 346,
        );
    }

    #[Depends('testAssertReturn209')]
    public function testAssertReturn210(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '14180592859625794472'], ['type' => 'f64', 'value' => '3043918530412552819']]],
            expected: [['type' => 'f64', 'value' => '12617399980269247921']],
            line: 347,
        );
    }

    #[Depends('testAssertReturn210')]
    public function testAssertReturn211(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.mul', 'args' => [['type' => 'f32', 'value' => '436207616'], ['type' => 'f32', 'value' => '436207616']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 350,
        );
    }

    #[Depends('testAssertReturn211')]
    public function testAssertReturn212(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.mul', 'args' => [['type' => 'f32', 'value' => '436207617'], ['type' => 'f32', 'value' => '436207617']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 351,
        );
    }

    #[Depends('testAssertReturn212')]
    public function testAssertReturn213(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '2186111271319845836'], ['type' => 'f64', 'value' => '2186111271319845836']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 352,
        );
    }

    #[Depends('testAssertReturn213')]
    public function testAssertReturn214(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '2186111271319845837'], ['type' => 'f64', 'value' => '2186111271319845837']]],
            expected: [['type' => 'f64', 'value' => '1']],
            line: 353,
        );
    }

    #[Depends('testAssertReturn214')]
    public function testAssertReturn215(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.mul', 'args' => [['type' => 'f32', 'value' => '1602224127'], ['type' => 'f32', 'value' => '1602224127']]],
            expected: [['type' => 'f32', 'value' => '2139095038']],
            line: 356,
        );
    }

    #[Depends('testAssertReturn215')]
    public function testAssertReturn216(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.mul', 'args' => [['type' => 'f32', 'value' => '1602224128'], ['type' => 'f32', 'value' => '1602224128']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 357,
        );
    }

    #[Depends('testAssertReturn216')]
    public function testAssertReturn217(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '6913025428013711359'], ['type' => 'f64', 'value' => '6913025428013711359']]],
            expected: [['type' => 'f64', 'value' => '9218868437227405310']],
            line: 358,
        );
    }

    #[Depends('testAssertReturn217')]
    public function testAssertReturn218(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '6913025428013711360'], ['type' => 'f64', 'value' => '6913025428013711360']]],
            expected: [['type' => 'f64', 'value' => '9218868437227405312']],
            line: 359,
        );
    }

    #[Depends('testAssertReturn218')]
    public function testAssertReturn219(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.mul', 'args' => [['type' => 'f32', 'value' => '1065353217'], ['type' => 'f32', 'value' => '1065353217']]],
            expected: [['type' => 'f32', 'value' => '1065353218']],
            line: 362,
        );
    }

    #[Depends('testAssertReturn219')]
    public function testAssertReturn220(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.mul', 'args' => [['type' => 'f32', 'value' => '1065353215'], ['type' => 'f32', 'value' => '1065353215']]],
            expected: [['type' => 'f32', 'value' => '1065353214']],
            line: 363,
        );
    }

    #[Depends('testAssertReturn220')]
    public function testAssertReturn221(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '4607182418800017409'], ['type' => 'f64', 'value' => '4607182418800017409']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017410']],
            line: 364,
        );
    }

    #[Depends('testAssertReturn221')]
    public function testAssertReturn222(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '4607182418800017407'], ['type' => 'f64', 'value' => '4607182418800017407']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017406']],
            line: 365,
        );
    }

    #[Depends('testAssertReturn222')]
    public function testAssertReturn223(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.mul', 'args' => [['type' => 'f32', 'value' => '1065353217'], ['type' => 'f32', 'value' => '1065353215']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 368,
        );
    }

    #[Depends('testAssertReturn223')]
    public function testAssertReturn224(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.mul', 'args' => [['type' => 'f32', 'value' => '1065353218'], ['type' => 'f32', 'value' => '1065353214']]],
            expected: [['type' => 'f32', 'value' => '1065353217']],
            line: 369,
        );
    }

    #[Depends('testAssertReturn224')]
    public function testAssertReturn225(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '4607182418800017409'], ['type' => 'f64', 'value' => '4607182418800017407']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 370,
        );
    }

    #[Depends('testAssertReturn225')]
    public function testAssertReturn226(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '4607182418800017410'], ['type' => 'f64', 'value' => '4607182418800017406']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017409']],
            line: 371,
        );
    }

    #[Depends('testAssertReturn226')]
    public function testAssertReturn227(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.mul', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '872415232']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 375,
        );
    }

    #[Depends('testAssertReturn227')]
    public function testAssertReturn228(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.mul', 'args' => [['type' => 'f64', 'value' => '4503599627370496'], ['type' => 'f64', 'value' => '4372995238176751616']]],
            expected: [['type' => 'f64', 'value' => '1']],
            line: 376,
        );
    }

    #[Depends('testAssertReturn228')]
    public function testAssertReturn229(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.mul', 'args' => [['type' => 'f32', 'value' => '3246392064'], ['type' => 'f32', 'value' => '212992']]],
            expected: [['type' => 'f32', 'value' => '2150891832']],
            line: 379,
        );
    }

    #[Depends('testAssertReturn229')]
    public function testAssertReturn230(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '1066388847'], ['type' => 'f32', 'value' => '1120403456']]],
            expected: [['type' => 'f32', 'value' => '1010307378']],
            line: 382,
        );
    }

    #[Depends('testAssertReturn230')]
    public function testAssertReturn231(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '1258294259'], ['type' => 'f32', 'value' => '1262485497']]],
            expected: [['type' => 'f32', 'value' => '1059764896']],
            line: 383,
        );
    }

    #[Depends('testAssertReturn231')]
    public function testAssertReturn232(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '1199570944'], ['type' => 'f32', 'value' => '754974720']]],
            expected: [['type' => 'f32', 'value' => '1509949440']],
            line: 384,
        );
    }

    #[Depends('testAssertReturn232')]
    public function testAssertReturn233(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '1072586677'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '3905517']],
            line: 385,
        );
    }

    #[Depends('testAssertReturn233')]
    public function testAssertReturn234(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '1082130432'], ['type' => 'f32', 'value' => '1077936128']]],
            expected: [['type' => 'f32', 'value' => '1068149419']],
            line: 386,
        );
    }

    #[Depends('testAssertReturn234')]
    public function testAssertReturn235(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '4607738418748954166'], ['type' => 'f64', 'value' => '4636737291354636288']]],
            expected: [['type' => 'f64', 'value' => '4577629909238726725']],
            line: 387,
        );
    }

    #[Depends('testAssertReturn235')]
    public function testAssertReturn236(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '4710766852517658624'], ['type' => 'f64', 'value' => '4713017006285127680']]],
            expected: [['type' => 'f64', 'value' => '4604182212107680295']],
            line: 388,
        );
    }

    #[Depends('testAssertReturn236')]
    public function testAssertReturn237(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '4679240012837945344'], ['type' => 'f64', 'value' => '4440549232587309056']]],
            expected: [['type' => 'f64', 'value' => '4845873199050653696']],
            line: 389,
        );
    }

    #[Depends('testAssertReturn237')]
    public function testAssertReturn238(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '4611065853604003840'], ['type' => 'f64', 'value' => '9218868437227405311']]],
            expected: [['type' => 'f64', 'value' => '2096758607839232']],
            line: 390,
        );
    }

    #[Depends('testAssertReturn238')]
    public function testAssertReturn239(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '4616189618054758400'], ['type' => 'f64', 'value' => '4613937818241073152']]],
            expected: [['type' => 'f64', 'value' => '4608683618675807573']],
            line: 391,
        );
    }

    #[Depends('testAssertReturn239')]
    public function testAssertReturn240(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '1249905654'], ['type' => 'f32', 'value' => '1245708284']]],
            expected: [['type' => 'f32', 'value' => '1068153505']],
            line: 395,
        );
    }

    #[Depends('testAssertReturn240')]
    public function testAssertReturn241(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '4706263254500900864'], ['type' => 'f64', 'value' => '4704009808640999424']]],
            expected: [['type' => 'f64', 'value' => '4608685812450356035']],
            line: 396,
        );
    }

    #[Depends('testAssertReturn241')]
    public function testAssertReturn242(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '666187309'], ['type' => 'f32', 'value' => '2138899896']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 399,
        );
    }

    #[Depends('testAssertReturn242')]
    public function testAssertReturn243(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '338737113'], ['type' => 'f32', 'value' => '1637454009']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 400,
        );
    }

    #[Depends('testAssertReturn243')]
    public function testAssertReturn244(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '3351999420'], ['type' => 'f32', 'value' => '401966635']]],
            expected: [['type' => 'f32', 'value' => '4015268357']],
            line: 401,
        );
    }

    #[Depends('testAssertReturn244')]
    public function testAssertReturn245(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '2582720800'], ['type' => 'f32', 'value' => '2197197239']]],
            expected: [['type' => 'f32', 'value' => '1450863298']],
            line: 402,
        );
    }

    #[Depends('testAssertReturn245')]
    public function testAssertReturn246(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '3564182439'], ['type' => 'f32', 'value' => '397999726']]],
            expected: [['type' => 'f32', 'value' => '4230402947']],
            line: 403,
        );
    }

    #[Depends('testAssertReturn246')]
    public function testAssertReturn247(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '5269602717919885505'], ['type' => 'f64', 'value' => '5615431061534361830']]],
            expected: [['type' => 'f64', 'value' => '4261119458085367075']],
            line: 404,
        );
    }

    #[Depends('testAssertReturn247')]
    public function testAssertReturn248(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '1791703022234099881'], ['type' => 'f64', 'value' => '230587289790163684']]],
            expected: [['type' => 'f64', 'value' => '6167818452243445017']],
            line: 405,
        );
    }

    #[Depends('testAssertReturn248')]
    public function testAssertReturn249(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '15176390632865983384'], ['type' => 'f64', 'value' => '7489729865403831125']]],
            expected: [['type' => 'f64', 'value' => '12293662509603441500']],
            line: 406,
        );
    }

    #[Depends('testAssertReturn249')]
    public function testAssertReturn250(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '16945752639368638170'], ['type' => 'f64', 'value' => '5718505335991307775']]],
            expected: [['type' => 'f64', 'value' => '15834399302320062011']],
            line: 407,
        );
    }

    #[Depends('testAssertReturn250')]
    public function testAssertReturn251(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '16263708435887736913'], ['type' => 'f64', 'value' => '6648866667391375614']]],
            expected: [['type' => 'f64', 'value' => '14221856927329063502']],
            line: 408,
        );
    }

    #[Depends('testAssertReturn251')]
    public function testAssertReturn252(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '3798033061'], ['type' => 'f32', 'value' => '2491443361']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 411,
        );
    }

    #[Depends('testAssertReturn252')]
    public function testAssertReturn253(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '686927199'], ['type' => 'f32', 'value' => '1440960248']]],
            expected: [['type' => 'f32', 'value' => '310908762']],
            line: 412,
        );
    }

    #[Depends('testAssertReturn253')]
    public function testAssertReturn254(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '1067646869'], ['type' => 'f32', 'value' => '3960423338']]],
            expected: [['type' => 'f32', 'value' => '2467406247']],
            line: 413,
        );
    }

    #[Depends('testAssertReturn254')]
    public function testAssertReturn255(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '642177221'], ['type' => 'f32', 'value' => '2685135']]],
            expected: [['type' => 'f32', 'value' => '1713065419']],
            line: 414,
        );
    }

    #[Depends('testAssertReturn255')]
    public function testAssertReturn256(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '1824271560'], ['type' => 'f32', 'value' => '1797890210']]],
            expected: [['type' => 'f32', 'value' => '1091436270']],
            line: 415,
        );
    }

    #[Depends('testAssertReturn256')]
    public function testAssertReturn257(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '4278321332874065'], ['type' => 'f64', 'value' => '15464375907975098426']]],
            expected: [['type' => 'f64', 'value' => '9223372036854775808']],
            line: 416,
        );
    }

    #[Depends('testAssertReturn257')]
    public function testAssertReturn258(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '9385779280320516508'], ['type' => 'f64', 'value' => '2195352144435258723']]],
            expected: [['type' => 'f64', 'value' => '11796946241575527184']],
            line: 417,
        );
    }

    #[Depends('testAssertReturn258')]
    public function testAssertReturn259(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '12019785500442997560'], ['type' => 'f64', 'value' => '14033717547286793792']]],
            expected: [['type' => 'f64', 'value' => '2592881844429368931']],
            line: 418,
        );
    }

    #[Depends('testAssertReturn259')]
    public function testAssertReturn260(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '14192622858179995755'], ['type' => 'f64', 'value' => '1048270709368415171']]],
            expected: [['type' => 'f64', 'value' => '17751311910175316838']],
            line: 419,
        );
    }

    #[Depends('testAssertReturn260')]
    public function testAssertReturn261(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '14895971708944847415'], ['type' => 'f64', 'value' => '14082502105592202184']]],
            expected: [['type' => 'f64', 'value' => '5420603229995464966']],
            line: 420,
        );
    }

    #[Depends('testAssertReturn261')]
    public function testAssertReturn262(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '1286756690'], ['type' => 'f32', 'value' => '74754985']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 423,
        );
    }

    #[Depends('testAssertReturn262')]
    public function testAssertReturn263(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '3861505243'], ['type' => 'f32', 'value' => '1298875600']]],
            expected: [['type' => 'f32', 'value' => '3627605330']],
            line: 424,
        );
    }

    #[Depends('testAssertReturn263')]
    public function testAssertReturn264(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '1387472197'], ['type' => 'f32', 'value' => '4021087697']]],
            expected: [['type' => 'f32', 'value' => '2726599162']],
            line: 425,
        );
    }

    #[Depends('testAssertReturn264')]
    public function testAssertReturn265(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '4149014653'], ['type' => 'f32', 'value' => '3294714580']]],
            expected: [['type' => 'f32', 'value' => '1919471347']],
            line: 426,
        );
    }

    #[Depends('testAssertReturn265')]
    public function testAssertReturn266(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '3987554477'], ['type' => 'f32', 'value' => '3327836421']]],
            expected: [['type' => 'f32', 'value' => '1724563548']],
            line: 427,
        );
    }

    #[Depends('testAssertReturn266')]
    public function testAssertReturn267(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '10882983485852580843'], ['type' => 'f64', 'value' => '1499380901194126188']]],
            expected: [['type' => 'f64', 'value' => '13990715555071506017']],
            line: 428,
        );
    }

    #[Depends('testAssertReturn267')]
    public function testAssertReturn268(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '17353632673902705731'], ['type' => 'f64', 'value' => '11343375610449883809']]],
            expected: [['type' => 'f64', 'value' => '9218868437227405312']],
            line: 429,
        );
    }

    #[Depends('testAssertReturn268')]
    public function testAssertReturn269(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '10471640091267549911'], ['type' => 'f64', 'value' => '4317563730789156718']]],
            expected: [['type' => 'f64', 'value' => '10760831595995331201']],
            line: 430,
        );
    }

    #[Depends('testAssertReturn269')]
    public function testAssertReturn270(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '15262578458239868670'], ['type' => 'f64', 'value' => '11184694400998603321']]],
            expected: [['type' => 'f64', 'value' => '8684356686754640262']],
            line: 431,
        );
    }

    #[Depends('testAssertReturn270')]
    public function testAssertReturn271(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '5423766533942924987'], ['type' => 'f64', 'value' => '14797877595923399406']]],
            expected: [['type' => 'f64', 'value' => '13679565210380085385']],
            line: 432,
        );
    }

    #[Depends('testAssertReturn271')]
    public function testAssertReturn272(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '16467910284400317286'], ['type' => 'f64', 'value' => '14710955777971283471']]],
            expected: [['type' => 'f64', 'value' => '6363956244686200611']],
            line: 435,
        );
    }

    #[Depends('testAssertReturn272')]
    public function testAssertReturn273(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '16290965053652735591'], ['type' => 'f64', 'value' => '15317706837775392625']]],
            expected: [['type' => 'f64', 'value' => '5580355845867636249']],
            line: 436,
        );
    }

    #[Depends('testAssertReturn273')]
    public function testAssertReturn274(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '5440366292977110369'], ['type' => 'f64', 'value' => '18177315027663270891']]],
            expected: [['type' => 'f64', 'value' => '10316437533262127859']],
            line: 437,
        );
    }

    #[Depends('testAssertReturn274')]
    public function testAssertReturn275(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '5586144947709395659'], ['type' => 'f64', 'value' => '6532436425888624877']]],
            expected: [['type' => 'f64', 'value' => '3660708720660625999']],
            line: 438,
        );
    }

    #[Depends('testAssertReturn275')]
    public function testAssertReturn276(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '17550005606375580620'], ['type' => 'f64', 'value' => '6180045224129992598']]],
            expected: [['type' => 'f64', 'value' => '15976575755200563719']],
            line: 439,
        );
    }

    #[Depends('testAssertReturn276')]
    public function testAssertReturn277(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '4611065853588275309'], ['type' => 'f64', 'value' => '9218868437227405311']]],
            expected: [['type' => 'f64', 'value' => '2096758603907099']],
            line: 442,
        );
    }

    #[Depends('testAssertReturn277')]
    public function testAssertReturn278(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '58005932411648970'], ['type' => 'f64', 'value' => '4662638783615926141']]],
            expected: [['type' => 'f64', 'value' => '3222112482593593']],
            line: 443,
        );
    }

    #[Depends('testAssertReturn278')]
    public function testAssertReturn279(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '13185764271695251812'], ['type' => 'f64', 'value' => '17795032469661562376']]],
            expected: [['type' => 'f64', 'value' => '1594123367530375']],
            line: 444,
        );
    }

    #[Depends('testAssertReturn279')]
    public function testAssertReturn280(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '12062544014359965409'], ['type' => 'f64', 'value' => '16674780236028867992']]],
            expected: [['type' => 'f64', 'value' => '1036869663772871']],
            line: 445,
        );
    }

    #[Depends('testAssertReturn280')]
    public function testAssertReturn281(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '752499975442349235'], ['type' => 'f64', 'value' => '5356690663768240614']]],
            expected: [['type' => 'f64', 'value' => '3442089173194313']],
            line: 446,
        );
    }

    #[Depends('testAssertReturn281')]
    public function testAssertReturn282(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '83041154348962762'], ['type' => 'f64', 'value' => '13934889252531101931']]],
            expected: [['type' => 'f64', 'value' => '9223458798833500621']],
            line: 447,
        );
    }

    #[Depends('testAssertReturn282')]
    public function testAssertReturn283(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '1817629909'], ['type' => 'f32', 'value' => '1421132838']]],
            expected: [['type' => 'f32', 'value' => '1461198615']],
            line: 450,
        );
    }

    #[Depends('testAssertReturn283')]
    public function testAssertReturn284(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '1824604388'], ['type' => 'f32', 'value' => '4105258014']]],
            expected: [['type' => 'f32', 'value' => '3079375694']],
            line: 451,
        );
    }

    #[Depends('testAssertReturn284')]
    public function testAssertReturn285(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '1747858929'], ['type' => 'f32', 'value' => '1063784191']]],
            expected: [['type' => 'f32', 'value' => '1749036825']],
            line: 452,
        );
    }

    #[Depends('testAssertReturn285')]
    public function testAssertReturn286(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '3378374953'], ['type' => 'f32', 'value' => '3497907368']]],
            expected: [['type' => 'f32', 'value' => '945802923']],
            line: 453,
        );
    }

    #[Depends('testAssertReturn286')]
    public function testAssertReturn287(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '2861015275'], ['type' => 'f32', 'value' => '3684669151']]],
            expected: [['type' => 'f32', 'value' => '240750700']],
            line: 454,
        );
    }

    #[Depends('testAssertReturn287')]
    public function testAssertReturn288(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '4885037015672297625'], ['type' => 'f64', 'value' => '9954263091431620051']]],
            expected: [['type' => 'f64', 'value' => '17984289216286432053']],
            line: 455,
        );
    }

    #[Depends('testAssertReturn288')]
    public function testAssertReturn289(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '4022347395424227722'], ['type' => 'f64', 'value' => '11486191764643320419']]],
            expected: [['type' => 'f64', 'value' => '15589554694846453438']],
            line: 456,
        );
    }

    #[Depends('testAssertReturn289')]
    public function testAssertReturn290(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '7623973190248181230'], ['type' => 'f64', 'value' => '7481900282945497881']]],
            expected: [['type' => 'f64', 'value' => '4748664889769504925']],
            line: 457,
        );
    }

    #[Depends('testAssertReturn290')]
    public function testAssertReturn291(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '14650287530633645126'], ['type' => 'f64', 'value' => '8091500841285620267']]],
            expected: [['type' => 'f64', 'value' => '11165393291297270552']],
            line: 458,
        );
    }

    #[Depends('testAssertReturn291')]
    public function testAssertReturn292(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '9910334119372230161'], ['type' => 'f64', 'value' => '10921408834055405722']]],
            expected: [['type' => 'f64', 'value' => '3596021921286071170']],
            line: 459,
        );
    }

    #[Depends('testAssertReturn292')]
    public function testAssertReturn293(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '4352764235752579571'], ['type' => 'f64', 'value' => '4610853254537913145']]],
            expected: [['type' => 'f64', 'value' => '4348952422448611708']],
            line: 462,
        );
    }

    #[Depends('testAssertReturn293')]
    public function testAssertReturn294(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '4148344307949876337'], ['type' => 'f64', 'value' => '13642564096968604240']]],
            expected: [['type' => 'f64', 'value' => '13559333871418047670']],
            line: 463,
        );
    }

    #[Depends('testAssertReturn294')]
    public function testAssertReturn295(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '4425554483259831683'], ['type' => 'f64', 'value' => '4103199251532205583']]],
            expected: [['type' => 'f64', 'value' => '4929315895081747238']],
            line: 464,
        );
    }

    #[Depends('testAssertReturn295')]
    public function testAssertReturn296(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '5011653323436109419'], ['type' => 'f64', 'value' => '5044067306150920275']]],
            expected: [['type' => 'f64', 'value' => '4574739988274663188']],
            line: 465,
        );
    }

    #[Depends('testAssertReturn296')]
    public function testAssertReturn297(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '4558988817252519457'], ['type' => 'f64', 'value' => '14066629987516208597']]],
            expected: [['type' => 'f64', 'value' => '13546063418479940250']],
            line: 466,
        );
    }

    #[Depends('testAssertReturn297')]
    public function testAssertReturn298(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '8388608'], ['type' => 'f32', 'value' => '8388607']]],
            expected: [['type' => 'f32', 'value' => '1065353217']],
            line: 469,
        );
    }

    #[Depends('testAssertReturn298')]
    public function testAssertReturn299(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '8388607'], ['type' => 'f32', 'value' => '8388608']]],
            expected: [['type' => 'f32', 'value' => '1065353214']],
            line: 470,
        );
    }

    #[Depends('testAssertReturn299')]
    public function testAssertReturn300(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '4503599627370496'], ['type' => 'f64', 'value' => '4503599627370495']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017409']],
            line: 471,
        );
    }

    #[Depends('testAssertReturn300')]
    public function testAssertReturn301(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '4503599627370495'], ['type' => 'f64', 'value' => '4503599627370496']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017406']],
            line: 472,
        );
    }

    #[Depends('testAssertReturn301')]
    public function testAssertReturn302(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '880803839'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 475,
        );
    }

    #[Depends('testAssertReturn302')]
    public function testAssertReturn303(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '880803840'], ['type' => 'f32', 'value' => '2139095039']]],
            expected: [['type' => 'f32', 'value' => '1']],
            line: 476,
        );
    }

    #[Depends('testAssertReturn303')]
    public function testAssertReturn304(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '4377498837804122111'], ['type' => 'f64', 'value' => '9218868437227405311']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 477,
        );
    }

    #[Depends('testAssertReturn304')]
    public function testAssertReturn305(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '4377498837804122112'], ['type' => 'f64', 'value' => '9218868437227405311']]],
            expected: [['type' => 'f64', 'value' => '1']],
            line: 478,
        );
    }

    #[Depends('testAssertReturn305')]
    public function testAssertReturn306(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2097152']]],
            expected: [['type' => 'f32', 'value' => '2139095040']],
            line: 481,
        );
    }

    #[Depends('testAssertReturn306')]
    public function testAssertReturn307(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2097153']]],
            expected: [['type' => 'f32', 'value' => '2139095032']],
            line: 482,
        );
    }

    #[Depends('testAssertReturn307')]
    public function testAssertReturn308(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'f64', 'value' => '1125899906842624']]],
            expected: [['type' => 'f64', 'value' => '9218868437227405312']],
            line: 483,
        );
    }

    #[Depends('testAssertReturn308')]
    public function testAssertReturn309(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'f64', 'value' => '1125899906842625']]],
            expected: [['type' => 'f64', 'value' => '9218868437227405304']],
            line: 484,
        );
    }

    #[Depends('testAssertReturn309')]
    public function testAssertReturn310(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2122317825']]],
            expected: [['type' => 'f32', 'value' => '8388607']],
            line: 487,
        );
    }

    #[Depends('testAssertReturn310')]
    public function testAssertReturn311(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '2122317824']]],
            expected: [['type' => 'f32', 'value' => '8388608']],
            line: 488,
        );
    }

    #[Depends('testAssertReturn311')]
    public function testAssertReturn312(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'f64', 'value' => '9209861237972664321']]],
            expected: [['type' => 'f64', 'value' => '4503599627370495']],
            line: 489,
        );
    }

    #[Depends('testAssertReturn312')]
    public function testAssertReturn313(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'f64', 'value' => '9209861237972664320']]],
            expected: [['type' => 'f64', 'value' => '4503599627370496']],
            line: 490,
        );
    }

    #[Depends('testAssertReturn313')]
    public function testAssertReturn314(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1077936128']]],
            expected: [['type' => 'f32', 'value' => '1051372203']],
            line: 500,
        );
    }

    #[Depends('testAssertReturn314')]
    public function testAssertReturn315(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '1077936128'], ['type' => 'f32', 'value' => '1091567616']]],
            expected: [['type' => 'f32', 'value' => '1051372203']],
            line: 501,
        );
    }

    #[Depends('testAssertReturn315')]
    public function testAssertReturn316(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '1091567616'], ['type' => 'f32', 'value' => '1104674816']]],
            expected: [['type' => 'f32', 'value' => '1051372203']],
            line: 502,
        );
    }

    #[Depends('testAssertReturn316')]
    public function testAssertReturn317(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'f64', 'value' => '4613937818241073152']]],
            expected: [['type' => 'f64', 'value' => '4599676419421066581']],
            line: 503,
        );
    }

    #[Depends('testAssertReturn317')]
    public function testAssertReturn318(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '4613937818241073152'], ['type' => 'f64', 'value' => '4621256167635550208']]],
            expected: [['type' => 'f64', 'value' => '4599676419421066581']],
            line: 504,
        );
    }

    #[Depends('testAssertReturn318')]
    public function testAssertReturn319(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '4621256167635550208'], ['type' => 'f64', 'value' => '4628293042053316608']]],
            expected: [['type' => 'f64', 'value' => '4599676419421066581']],
            line: 505,
        );
    }

    #[Depends('testAssertReturn319')]
    public function testAssertReturn320(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '1065353217'], ['type' => 'f32', 'value' => '1065353215']]],
            expected: [['type' => 'f32', 'value' => '1065353218']],
            line: 508,
        );
    }

    #[Depends('testAssertReturn320')]
    public function testAssertReturn321(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '1065353215'], ['type' => 'f32', 'value' => '1065353217']]],
            expected: [['type' => 'f32', 'value' => '1065353213']],
            line: 509,
        );
    }

    #[Depends('testAssertReturn321')]
    public function testAssertReturn322(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1065353215']]],
            expected: [['type' => 'f32', 'value' => '1065353217']],
            line: 510,
        );
    }

    #[Depends('testAssertReturn322')]
    public function testAssertReturn323(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.div', 'args' => [['type' => 'f32', 'value' => '1065353216'], ['type' => 'f32', 'value' => '1065353217']]],
            expected: [['type' => 'f32', 'value' => '1065353214']],
            line: 511,
        );
    }

    #[Depends('testAssertReturn323')]
    public function testAssertReturn324(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '4607182418800017409'], ['type' => 'f64', 'value' => '4607182418800017407']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017410']],
            line: 512,
        );
    }

    #[Depends('testAssertReturn324')]
    public function testAssertReturn325(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '4607182418800017407'], ['type' => 'f64', 'value' => '4607182418800017409']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017405']],
            line: 513,
        );
    }

    #[Depends('testAssertReturn325')]
    public function testAssertReturn326(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'f64', 'value' => '4607182418800017407']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017409']],
            line: 514,
        );
    }

    #[Depends('testAssertReturn326')]
    public function testAssertReturn327(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.div', 'args' => [['type' => 'f64', 'value' => '4607182418800017408'], ['type' => 'f64', 'value' => '4607182418800017409']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017406']],
            line: 515,
        );
    }

    #[Depends('testAssertReturn327')]
    public function testAssertReturn328(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sqrt', 'args' => [['type' => 'f32', 'value' => '1126891520']]],
            expected: [['type' => 'f32', 'value' => '1095842342']],
            line: 519,
        );
    }

    #[Depends('testAssertReturn328')]
    public function testAssertReturn329(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sqrt', 'args' => [['type' => 'f32', 'value' => '875341566']]],
            expected: [['type' => 'f32', 'value' => '970079310']],
            line: 520,
        );
    }

    #[Depends('testAssertReturn329')]
    public function testAssertReturn330(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '4640220544191430656']]],
            expected: [['type' => 'f64', 'value' => '4623551143926461685']],
            line: 521,
        );
    }

    #[Depends('testAssertReturn330')]
    public function testAssertReturn331(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '4505170691092029701']]],
            expected: [['type' => 'f64', 'value' => '4556032630010904473']],
            line: 522,
        );
    }

    #[Depends('testAssertReturn331')]
    public function testAssertReturn332(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '3868634135368364633']]],
            expected: [['type' => 'f64', 'value' => '4237908228221851551']],
            line: 525,
        );
    }

    #[Depends('testAssertReturn332')]
    public function testAssertReturn333(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '6130334638238385213']]],
            expected: [['type' => 'f64', 'value' => '5368736472460186647']],
            line: 526,
        );
    }

    #[Depends('testAssertReturn333')]
    public function testAssertReturn334(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '6420749722515481850']]],
            expected: [['type' => 'f64', 'value' => '5513761933181195411']],
            line: 527,
        );
    }

    #[Depends('testAssertReturn334')]
    public function testAssertReturn335(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '4441983858611369811']]],
            expected: [['type' => 'f64', 'value' => '4524423892028972029']],
            line: 528,
        );
    }

    #[Depends('testAssertReturn335')]
    public function testAssertReturn336(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '2943222801950574478']]],
            expected: [['type' => 'f64', 'value' => '3775077603066051757']],
            line: 529,
        );
    }

    #[Depends('testAssertReturn336')]
    public function testAssertReturn337(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '4607182418800017407']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017407']],
            line: 533,
        );
    }

    #[Depends('testAssertReturn337')]
    public function testAssertReturn338(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sqrt', 'args' => [['type' => 'f32', 'value' => '1040498738']]],
            expected: [['type' => 'f32', 'value' => '1052268824']],
            line: 536,
        );
    }

    #[Depends('testAssertReturn338')]
    public function testAssertReturn339(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sqrt', 'args' => [['type' => 'f32', 'value' => '1911349112']]],
            expected: [['type' => 'f32', 'value' => '1487806505']],
            line: 537,
        );
    }

    #[Depends('testAssertReturn339')]
    public function testAssertReturn340(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sqrt', 'args' => [['type' => 'f32', 'value' => '1033984731']]],
            expected: [['type' => 'f32', 'value' => '1049605767']],
            line: 538,
        );
    }

    #[Depends('testAssertReturn340')]
    public function testAssertReturn341(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sqrt', 'args' => [['type' => 'f32', 'value' => '471548520']]],
            expected: [['type' => 'f32', 'value' => '768040305']],
            line: 539,
        );
    }

    #[Depends('testAssertReturn341')]
    public function testAssertReturn342(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sqrt', 'args' => [['type' => 'f32', 'value' => '980180519']]],
            expected: [['type' => 'f32', 'value' => '1022754037']],
            line: 540,
        );
    }

    #[Depends('testAssertReturn342')]
    public function testAssertReturn343(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '447478826231748356']]],
            expected: [['type' => 'f64', 'value' => '2527268346316778217']],
            line: 541,
        );
    }

    #[Depends('testAssertReturn343')]
    public function testAssertReturn344(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '7882765141420635228']]],
            expected: [['type' => 'f64', 'value' => '6244818117372907505']],
            line: 542,
        );
    }

    #[Depends('testAssertReturn344')]
    public function testAssertReturn345(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '6345006020483303032']]],
            expected: [['type' => 'f64', 'value' => '5476089630784211276']],
            line: 543,
        );
    }

    #[Depends('testAssertReturn345')]
    public function testAssertReturn346(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '5080974719163899092']]],
            expected: [['type' => 'f64', 'value' => '4843851732197030563']],
            line: 544,
        );
    }

    #[Depends('testAssertReturn346')]
    public function testAssertReturn347(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '9108179429173493573']]],
            expected: [['type' => 'f64', 'value' => '6857570252025178944']],
            line: 545,
        );
    }

    #[Depends('testAssertReturn347')]
    public function testAssertReturn348(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sqrt', 'args' => [['type' => 'f32', 'value' => '1293112087']]],
            expected: [['type' => 'f32', 'value' => '1178743848']],
            line: 548,
        );
    }

    #[Depends('testAssertReturn348')]
    public function testAssertReturn349(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sqrt', 'args' => [['type' => 'f32', 'value' => '118173697']]],
            expected: [['type' => 'f32', 'value' => '591184817']],
            line: 549,
        );
    }

    #[Depends('testAssertReturn349')]
    public function testAssertReturn350(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sqrt', 'args' => [['type' => 'f32', 'value' => '941555112']]],
            expected: [['type' => 'f32', 'value' => '1003077404']],
            line: 550,
        );
    }

    #[Depends('testAssertReturn350')]
    public function testAssertReturn351(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sqrt', 'args' => [['type' => 'f32', 'value' => '60323222']]],
            expected: [['type' => 'f32', 'value' => '562803203']],
            line: 551,
        );
    }

    #[Depends('testAssertReturn351')]
    public function testAssertReturn352(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sqrt', 'args' => [['type' => 'f32', 'value' => '40220718']]],
            expected: [['type' => 'f32', 'value' => '552763653']],
            line: 552,
        );
    }

    #[Depends('testAssertReturn352')]
    public function testAssertReturn353(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '7741365502393472048']]],
            expected: [['type' => 'f64', 'value' => '6174272493021072850']],
            line: 553,
        );
    }

    #[Depends('testAssertReturn353')]
    public function testAssertReturn354(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '1175297548666390979']]],
            expected: [['type' => 'f64', 'value' => '2891239701856850373']],
            line: 554,
        );
    }

    #[Depends('testAssertReturn354')]
    public function testAssertReturn355(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '4474969389470739153']]],
            expected: [['type' => 'f64', 'value' => '4540897185465678583']],
            line: 555,
        );
    }

    #[Depends('testAssertReturn355')]
    public function testAssertReturn356(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '3521792205891300764']]],
            expected: [['type' => 'f64', 'value' => '4064104284248214854']],
            line: 556,
        );
    }

    #[Depends('testAssertReturn356')]
    public function testAssertReturn357(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '8798159938601760820']]],
            expected: [['type' => 'f64', 'value' => '6702520650372831162']],
            line: 557,
        );
    }

    #[Depends('testAssertReturn357')]
    public function testAssertReturn358(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sqrt', 'args' => [['type' => 'f32', 'value' => '2058533950']]],
            expected: [['type' => 'f32', 'value' => '1561805138']],
            line: 560,
        );
    }

    #[Depends('testAssertReturn358')]
    public function testAssertReturn359(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sqrt', 'args' => [['type' => 'f32', 'value' => '1194962978']]],
            expected: [['type' => 'f32', 'value' => '1129973536']],
            line: 561,
        );
    }

    #[Depends('testAssertReturn359')]
    public function testAssertReturn360(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sqrt', 'args' => [['type' => 'f32', 'value' => '1062209384']]],
            expected: [['type' => 'f32', 'value' => '1063699830']],
            line: 562,
        );
    }

    #[Depends('testAssertReturn360')]
    public function testAssertReturn361(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sqrt', 'args' => [['type' => 'f32', 'value' => '339551808']]],
            expected: [['type' => 'f32', 'value' => '702287090']],
            line: 563,
        );
    }

    #[Depends('testAssertReturn361')]
    public function testAssertReturn362(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sqrt', 'args' => [['type' => 'f32', 'value' => '279876202']]],
            expected: [['type' => 'f32', 'value' => '672496559']],
            line: 564,
        );
    }

    #[Depends('testAssertReturn362')]
    public function testAssertReturn363(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '7933654283200418420']]],
            expected: [['type' => 'f64', 'value' => '6270248298536475417']],
            line: 565,
        );
    }

    #[Depends('testAssertReturn363')]
    public function testAssertReturn364(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '2893298197477532149']]],
            expected: [['type' => 'f64', 'value' => '3750137482611732493']],
            line: 566,
        );
    }

    #[Depends('testAssertReturn364')]
    public function testAssertReturn365(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '8954101765007123282']]],
            expected: [['type' => 'f64', 'value' => '6780419764181964566']],
            line: 567,
        );
    }

    #[Depends('testAssertReturn365')]
    public function testAssertReturn366(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '4405641787023763989']]],
            expected: [['type' => 'f64', 'value' => '4506213966714545194']],
            line: 568,
        );
    }

    #[Depends('testAssertReturn366')]
    public function testAssertReturn367(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '2394824404681191749']]],
            expected: [['type' => 'f64', 'value' => '3500764341454448999']],
            line: 569,
        );
    }

    #[Depends('testAssertReturn367')]
    public function testAssertReturn368(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '9494538992465685200']]],
            expected: [['type' => 'f64', 'value' => 'nan:canonical']],
            line: 572,
        );
    }

    #[Depends('testAssertReturn368')]
    public function testAssertReturn369(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '5074882158241187075']]],
            expected: [['type' => 'f64', 'value' => '4841025724322244342']],
            line: 573,
        );
    }

    #[Depends('testAssertReturn369')]
    public function testAssertReturn370(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '1187437724299488295']]],
            expected: [['type' => 'f64', 'value' => '2897120674751402313']],
            line: 574,
        );
    }

    #[Depends('testAssertReturn370')]
    public function testAssertReturn371(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '3368223178643061438']]],
            expected: [['type' => 'f64', 'value' => '3987382964717611901']],
            line: 575,
        );
    }

    #[Depends('testAssertReturn371')]
    public function testAssertReturn372(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '7161993531047854177']]],
            expected: [['type' => 'f64', 'value' => '5884408968142469554']],
            line: 576,
        );
    }

    #[Depends('testAssertReturn372')]
    public function testAssertReturn373(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sqrt', 'args' => [['type' => 'f32', 'value' => '1065353217']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 579,
        );
    }

    #[Depends('testAssertReturn373')]
    public function testAssertReturn374(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sqrt', 'args' => [['type' => 'f32', 'value' => '1065353218']]],
            expected: [['type' => 'f32', 'value' => '1065353217']],
            line: 580,
        );
    }

    #[Depends('testAssertReturn374')]
    public function testAssertReturn375(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '4607182418800017409']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 581,
        );
    }

    #[Depends('testAssertReturn375')]
    public function testAssertReturn376(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '4607182418800017410']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017409']],
            line: 582,
        );
    }

    #[Depends('testAssertReturn376')]
    public function testAssertReturn377(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sqrt', 'args' => [['type' => 'f32', 'value' => '1065353214']]],
            expected: [['type' => 'f32', 'value' => '1065353215']],
            line: 585,
        );
    }

    #[Depends('testAssertReturn377')]
    public function testAssertReturn378(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.sqrt', 'args' => [['type' => 'f32', 'value' => '1065353213']]],
            expected: [['type' => 'f32', 'value' => '1065353214']],
            line: 586,
        );
    }

    #[Depends('testAssertReturn378')]
    public function testAssertReturn379(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '4607182418800017406']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017407']],
            line: 587,
        );
    }

    #[Depends('testAssertReturn379')]
    public function testAssertReturn380(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.sqrt', 'args' => [['type' => 'f64', 'value' => '4607182418800017405']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017406']],
            line: 588,
        );
    }

    #[Depends('testAssertReturn380')]
    public function testAssertReturn381(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.abs', 'args' => [['type' => 'f32', 'value' => '2139156962']]],
            expected: [['type' => 'f32', 'value' => '2139156962']],
            line: 592,
        );
    }

    #[Depends('testAssertReturn381')]
    public function testAssertReturn382(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.abs', 'args' => [['type' => 'f32', 'value' => '4286640610']]],
            expected: [['type' => 'f32', 'value' => '2139156962']],
            line: 593,
        );
    }

    #[Depends('testAssertReturn382')]
    public function testAssertReturn383(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.abs', 'args' => [['type' => 'f64', 'value' => '9218868441285556843']]],
            expected: [['type' => 'f64', 'value' => '9218868441285556843']],
            line: 594,
        );
    }

    #[Depends('testAssertReturn383')]
    public function testAssertReturn384(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.abs', 'args' => [['type' => 'f64', 'value' => '18442240478140332651']]],
            expected: [['type' => 'f64', 'value' => '9218868441285556843']],
            line: 595,
        );
    }

    #[Depends('testAssertReturn384')]
    public function testAssertReturn385(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.neg', 'args' => [['type' => 'f32', 'value' => '2139156962']]],
            expected: [['type' => 'f32', 'value' => '4286640610']],
            line: 597,
        );
    }

    #[Depends('testAssertReturn385')]
    public function testAssertReturn386(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.neg', 'args' => [['type' => 'f32', 'value' => '4286640610']]],
            expected: [['type' => 'f32', 'value' => '2139156962']],
            line: 598,
        );
    }

    #[Depends('testAssertReturn386')]
    public function testAssertReturn387(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.neg', 'args' => [['type' => 'f64', 'value' => '9218868441285556843']]],
            expected: [['type' => 'f64', 'value' => '18442240478140332651']],
            line: 599,
        );
    }

    #[Depends('testAssertReturn387')]
    public function testAssertReturn388(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.neg', 'args' => [['type' => 'f64', 'value' => '18442240478140332651']]],
            expected: [['type' => 'f64', 'value' => '9218868441285556843']],
            line: 600,
        );
    }

    #[Depends('testAssertReturn388')]
    public function testAssertReturn389(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.copysign', 'args' => [['type' => 'f32', 'value' => '2139156962'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '2139156962']],
            line: 602,
        );
    }

    #[Depends('testAssertReturn389')]
    public function testAssertReturn390(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.copysign', 'args' => [['type' => 'f32', 'value' => '2139156962'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '4286640610']],
            line: 603,
        );
    }

    #[Depends('testAssertReturn390')]
    public function testAssertReturn391(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.copysign', 'args' => [['type' => 'f32', 'value' => '4286640610'], ['type' => 'f32', 'value' => '2143289344']]],
            expected: [['type' => 'f32', 'value' => '2139156962']],
            line: 604,
        );
    }

    #[Depends('testAssertReturn391')]
    public function testAssertReturn392(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.copysign', 'args' => [['type' => 'f32', 'value' => '4286640610'], ['type' => 'f32', 'value' => '4290772992']]],
            expected: [['type' => 'f32', 'value' => '4286640610']],
            line: 605,
        );
    }

    #[Depends('testAssertReturn392')]
    public function testAssertReturn393(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.copysign', 'args' => [['type' => 'f64', 'value' => '9218868441285556843'], ['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'f64', 'value' => '9218868441285556843']],
            line: 606,
        );
    }

    #[Depends('testAssertReturn393')]
    public function testAssertReturn394(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.copysign', 'args' => [['type' => 'f64', 'value' => '9218868441285556843'], ['type' => 'f64', 'value' => '18444492273895866368']]],
            expected: [['type' => 'f64', 'value' => '18442240478140332651']],
            line: 607,
        );
    }

    #[Depends('testAssertReturn394')]
    public function testAssertReturn395(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.copysign', 'args' => [['type' => 'f64', 'value' => '18442240478140332651'], ['type' => 'f64', 'value' => '9221120237041090560']]],
            expected: [['type' => 'f64', 'value' => '9218868441285556843']],
            line: 608,
        );
    }

    #[Depends('testAssertReturn395')]
    public function testAssertReturn396(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.copysign', 'args' => [['type' => 'f64', 'value' => '18442240478140332651'], ['type' => 'f64', 'value' => '18444492273895866368']]],
            expected: [['type' => 'f64', 'value' => '18442240478140332651']],
            line: 609,
        );
    }

    #[Depends('testAssertReturn396')]
    public function testAssertReturn397(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.ceil', 'args' => [['type' => 'f32', 'value' => '1065353215']]],
            expected: [['type' => 'f32', 'value' => '1065353216']],
            line: 612,
        );
    }

    #[Depends('testAssertReturn397')]
    public function testAssertReturn398(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.ceil', 'args' => [['type' => 'f32', 'value' => '1065353217']]],
            expected: [['type' => 'f32', 'value' => '1073741824']],
            line: 613,
        );
    }

    #[Depends('testAssertReturn398')]
    public function testAssertReturn399(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.ceil', 'args' => [['type' => 'f64', 'value' => '4607182418800017407']]],
            expected: [['type' => 'f64', 'value' => '4607182418800017408']],
            line: 614,
        );
    }

    #[Depends('testAssertReturn399')]
    public function testAssertReturn400(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.ceil', 'args' => [['type' => 'f64', 'value' => '4607182418800017409']]],
            expected: [['type' => 'f64', 'value' => '4611686018427387904']],
            line: 615,
        );
    }

    #[Depends('testAssertReturn400')]
    public function testAssertReturn401(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.ceil', 'args' => [['type' => 'f32', 'value' => '1258291199']]],
            expected: [['type' => 'f32', 'value' => '1258291200']],
            line: 618,
        );
    }

    #[Depends('testAssertReturn401')]
    public function testAssertReturn402(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.ceil', 'args' => [['type' => 'f32', 'value' => '3405774847']]],
            expected: [['type' => 'f32', 'value' => '3405774846']],
            line: 619,
        );
    }

    #[Depends('testAssertReturn402')]
    public function testAssertReturn403(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.ceil', 'args' => [['type' => 'f64', 'value' => '4841369599423283199']]],
            expected: [['type' => 'f64', 'value' => '4841369599423283200']],
            line: 620,
        );
    }

    #[Depends('testAssertReturn403')]
    public function testAssertReturn404(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.ceil', 'args' => [['type' => 'f64', 'value' => '14064741636278059007']]],
            expected: [['type' => 'f64', 'value' => '14064741636278059006']],
            line: 621,
        );
    }

    #[Depends('testAssertReturn404')]
    public function testAssertReturn405(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.ceil', 'args' => [['type' => 'f32', 'value' => '1266679807']]],
            expected: [['type' => 'f32', 'value' => '1266679807']],
            line: 625,
        );
    }

    #[Depends('testAssertReturn405')]
    public function testAssertReturn406(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.ceil', 'args' => [['type' => 'f32', 'value' => '3414163455']]],
            expected: [['type' => 'f32', 'value' => '3414163455']],
            line: 626,
        );
    }

    #[Depends('testAssertReturn406')]
    public function testAssertReturn407(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.ceil', 'args' => [['type' => 'f64', 'value' => '4845873199050653695']]],
            expected: [['type' => 'f64', 'value' => '4845873199050653695']],
            line: 627,
        );
    }

    #[Depends('testAssertReturn407')]
    public function testAssertReturn408(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.ceil', 'args' => [['type' => 'f64', 'value' => '14069245235905429503']]],
            expected: [['type' => 'f64', 'value' => '14069245235905429503']],
            line: 628,
        );
    }

    #[Depends('testAssertReturn408')]
    public function testAssertReturn409(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.floor', 'args' => [['type' => 'f32', 'value' => '3212836863']]],
            expected: [['type' => 'f32', 'value' => '3212836864']],
            line: 631,
        );
    }

    #[Depends('testAssertReturn409')]
    public function testAssertReturn410(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.floor', 'args' => [['type' => 'f32', 'value' => '3212836865']]],
            expected: [['type' => 'f32', 'value' => '3221225472']],
            line: 632,
        );
    }

    #[Depends('testAssertReturn410')]
    public function testAssertReturn411(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.floor', 'args' => [['type' => 'f64', 'value' => '13830554455654793215']]],
            expected: [['type' => 'f64', 'value' => '13830554455654793216']],
            line: 633,
        );
    }

    #[Depends('testAssertReturn411')]
    public function testAssertReturn412(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.floor', 'args' => [['type' => 'f64', 'value' => '13830554455654793217']]],
            expected: [['type' => 'f64', 'value' => '13835058055282163712']],
            line: 634,
        );
    }

    #[Depends('testAssertReturn412')]
    public function testAssertReturn413(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.floor', 'args' => [['type' => 'f32', 'value' => '3405774847']]],
            expected: [['type' => 'f32', 'value' => '3405774848']],
            line: 637,
        );
    }

    #[Depends('testAssertReturn413')]
    public function testAssertReturn414(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.floor', 'args' => [['type' => 'f32', 'value' => '1258291199']]],
            expected: [['type' => 'f32', 'value' => '1258291198']],
            line: 638,
        );
    }

    #[Depends('testAssertReturn414')]
    public function testAssertReturn415(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.floor', 'args' => [['type' => 'f64', 'value' => '14064741636278059007']]],
            expected: [['type' => 'f64', 'value' => '14064741636278059008']],
            line: 639,
        );
    }

    #[Depends('testAssertReturn415')]
    public function testAssertReturn416(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.floor', 'args' => [['type' => 'f64', 'value' => '4841369599423283199']]],
            expected: [['type' => 'f64', 'value' => '4841369599423283198']],
            line: 640,
        );
    }

    #[Depends('testAssertReturn416')]
    public function testAssertReturn417(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.floor', 'args' => [['type' => 'f32', 'value' => '1202524032']]],
            expected: [['type' => 'f32', 'value' => '1202524032']],
            line: 644,
        );
    }

    #[Depends('testAssertReturn417')]
    public function testAssertReturn418(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.floor', 'args' => [['type' => 'f64', 'value' => '4680825439885721600']]],
            expected: [['type' => 'f64', 'value' => '4680825439885721600']],
            line: 645,
        );
    }

    #[Depends('testAssertReturn418')]
    public function testAssertReturn419(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.trunc', 'args' => [['type' => 'f32', 'value' => '3405774847']]],
            expected: [['type' => 'f32', 'value' => '3405774846']],
            line: 648,
        );
    }

    #[Depends('testAssertReturn419')]
    public function testAssertReturn420(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.trunc', 'args' => [['type' => 'f32', 'value' => '1258291199']]],
            expected: [['type' => 'f32', 'value' => '1258291198']],
            line: 649,
        );
    }

    #[Depends('testAssertReturn420')]
    public function testAssertReturn421(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.trunc', 'args' => [['type' => 'f64', 'value' => '14064741636278059007']]],
            expected: [['type' => 'f64', 'value' => '14064741636278059006']],
            line: 650,
        );
    }

    #[Depends('testAssertReturn421')]
    public function testAssertReturn422(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.trunc', 'args' => [['type' => 'f64', 'value' => '4841369599423283199']]],
            expected: [['type' => 'f64', 'value' => '4841369599423283198']],
            line: 651,
        );
    }

    #[Depends('testAssertReturn422')]
    public function testAssertReturn423(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.nearest', 'args' => [['type' => 'f32', 'value' => '1258291201']]],
            expected: [['type' => 'f32', 'value' => '1258291201']],
            line: 656,
        );
    }

    #[Depends('testAssertReturn423')]
    public function testAssertReturn424(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.nearest', 'args' => [['type' => 'f32', 'value' => '1258291202']]],
            expected: [['type' => 'f32', 'value' => '1258291202']],
            line: 657,
        );
    }

    #[Depends('testAssertReturn424')]
    public function testAssertReturn425(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.nearest', 'args' => [['type' => 'f32', 'value' => '1056964607']]],
            expected: [['type' => 'f32', 'value' => '0']],
            line: 658,
        );
    }

    #[Depends('testAssertReturn425')]
    public function testAssertReturn426(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.nearest', 'args' => [['type' => 'f32', 'value' => '1468006399']]],
            expected: [['type' => 'f32', 'value' => '1468006399']],
            line: 659,
        );
    }

    #[Depends('testAssertReturn426')]
    public function testAssertReturn427(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.nearest', 'args' => [['type' => 'f64', 'value' => '4841369599423283201']]],
            expected: [['type' => 'f64', 'value' => '4841369599423283201']],
            line: 660,
        );
    }

    #[Depends('testAssertReturn427')]
    public function testAssertReturn428(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.nearest', 'args' => [['type' => 'f64', 'value' => '4841369599423283202']]],
            expected: [['type' => 'f64', 'value' => '4841369599423283202']],
            line: 661,
        );
    }

    #[Depends('testAssertReturn428')]
    public function testAssertReturn429(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.nearest', 'args' => [['type' => 'f64', 'value' => '4602678819172646911']]],
            expected: [['type' => 'f64', 'value' => '0']],
            line: 662,
        );
    }

    #[Depends('testAssertReturn429')]
    public function testAssertReturn430(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.nearest', 'args' => [['type' => 'f64', 'value' => '5084563979301289983']]],
            expected: [['type' => 'f64', 'value' => '5084563979301289983']],
            line: 663,
        );
    }

    #[Depends('testAssertReturn430')]
    public function testAssertReturn431(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.nearest', 'args' => [['type' => 'f32', 'value' => '1083179008']]],
            expected: [['type' => 'f32', 'value' => '1082130432']],
            line: 667,
        );
    }

    #[Depends('testAssertReturn431')]
    public function testAssertReturn432(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.nearest', 'args' => [['type' => 'f32', 'value' => '3230662656']]],
            expected: [['type' => 'f32', 'value' => '3229614080']],
            line: 668,
        );
    }

    #[Depends('testAssertReturn432')]
    public function testAssertReturn433(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.nearest', 'args' => [['type' => 'f32', 'value' => '3227516928']]],
            expected: [['type' => 'f32', 'value' => '3229614080']],
            line: 669,
        );
    }

    #[Depends('testAssertReturn433')]
    public function testAssertReturn434(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.nearest', 'args' => [['type' => 'f64', 'value' => '4616752568008179712']]],
            expected: [['type' => 'f64', 'value' => '4616189618054758400']],
            line: 670,
        );
    }

    #[Depends('testAssertReturn434')]
    public function testAssertReturn435(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.nearest', 'args' => [['type' => 'f64', 'value' => '13840124604862955520']]],
            expected: [['type' => 'f64', 'value' => '13839561654909534208']],
            line: 671,
        );
    }

    #[Depends('testAssertReturn435')]
    public function testAssertReturn436(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.nearest', 'args' => [['type' => 'f64', 'value' => '13838435755002691584']]],
            expected: [['type' => 'f64', 'value' => '13839561654909534208']],
            line: 672,
        );
    }

    #[Depends('testAssertReturn436')]
    public function testAssertReturn437(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.nearest', 'args' => [['type' => 'f32', 'value' => '3405774847']]],
            expected: [['type' => 'f32', 'value' => '3405774848']],
            line: 675,
        );
    }

    #[Depends('testAssertReturn437')]
    public function testAssertReturn438(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f32.nearest', 'args' => [['type' => 'f32', 'value' => '1258291199']]],
            expected: [['type' => 'f32', 'value' => '1258291200']],
            line: 676,
        );
    }

    #[Depends('testAssertReturn438')]
    public function testAssertReturn439(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.nearest', 'args' => [['type' => 'f64', 'value' => '14064741636278059007']]],
            expected: [['type' => 'f64', 'value' => '14064741636278059008']],
            line: 677,
        );
    }

    #[Depends('testAssertReturn439')]
    public function testAssertReturn440(): void
    {
        $this->runAssertReturnCommand(
            module: null,
            action: ['type' => 'invoke', 'field' => 'f64.nearest', 'args' => [['type' => 'f64', 'value' => '4841369599423283199']]],
            expected: [['type' => 'f64', 'value' => '4841369599423283200']],
            line: 678,
        );
    }
}
