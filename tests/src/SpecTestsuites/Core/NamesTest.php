<?php

declare(strict_types=1);

namespace Nsfisis\Waddiwasi\Tests\SpecTestsuites\Core;

use Nsfisis\Waddiwasi\Tests\SpecTestsuites\SpecTestsuiteBase;
use PHPUnit\Framework\Attributes\Depends;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class NamesTest extends SpecTestsuiteBase
{
    public function testModule0(): void
    {
        $this->runModuleCommand(
            filename: 'names.0.wasm',
            name: null,
            line: 4,
        );
    }

    #[Depends('testModule0')]
    public function testAssertReturn1(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'foo', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 8,
        );
    }

    #[Depends('testAssertReturn1')]
    public function testModule2(): void
    {
        $this->runModuleCommand(
            filename: 'names.1.wasm',
            name: null,
            line: 12,
        );
    }

    #[Depends('testModule2')]
    public function testAssertReturn3(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'foo', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 16,
        );
    }

    #[Depends('testAssertReturn3')]
    public function testModule4(): void
    {
        $this->runModuleCommand(
            filename: 'names.2.wasm',
            name: null,
            line: 19,
        );
    }

    #[Depends('testModule4')]
    public function testAssertReturn5(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '', 'args' => []],
            expected: [['type' => 'i32', 'value' => '0']],
            line: 615,
        );
    }

    #[Depends('testAssertReturn5')]
    public function testAssertReturn6(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '0', 'args' => []],
            expected: [['type' => 'i32', 'value' => '1']],
            line: 616,
        );
    }

    #[Depends('testAssertReturn6')]
    public function testAssertReturn7(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '-0', 'args' => []],
            expected: [['type' => 'i32', 'value' => '2']],
            line: 617,
        );
    }

    #[Depends('testAssertReturn7')]
    public function testAssertReturn8(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '_', 'args' => []],
            expected: [['type' => 'i32', 'value' => '3']],
            line: 618,
        );
    }

    #[Depends('testAssertReturn8')]
    public function testAssertReturn9(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '$', 'args' => []],
            expected: [['type' => 'i32', 'value' => '4']],
            line: 619,
        );
    }

    #[Depends('testAssertReturn9')]
    public function testAssertReturn10(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '@', 'args' => []],
            expected: [['type' => 'i32', 'value' => '5']],
            line: 620,
        );
    }

    #[Depends('testAssertReturn10')]
    public function testAssertReturn11(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '~!@#$%^&*()_+`-={}|[]\\:";\'<>?,./ ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '6']],
            line: 621,
        );
    }

    #[Depends('testAssertReturn11')]
    public function testAssertReturn12(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'NaN', 'args' => []],
            expected: [['type' => 'i32', 'value' => '7']],
            line: 622,
        );
    }

    #[Depends('testAssertReturn12')]
    public function testAssertReturn13(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Infinity', 'args' => []],
            expected: [['type' => 'i32', 'value' => '8']],
            line: 623,
        );
    }

    #[Depends('testAssertReturn13')]
    public function testAssertReturn14(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'if', 'args' => []],
            expected: [['type' => 'i32', 'value' => '9']],
            line: 624,
        );
    }

    #[Depends('testAssertReturn14')]
    public function testAssertReturn15(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'malloc', 'args' => []],
            expected: [['type' => 'i32', 'value' => '10']],
            line: 625,
        );
    }

    #[Depends('testAssertReturn15')]
    public function testAssertReturn16(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '_malloc', 'args' => []],
            expected: [['type' => 'i32', 'value' => '11']],
            line: 626,
        );
    }

    #[Depends('testAssertReturn16')]
    public function testAssertReturn17(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '__malloc', 'args' => []],
            expected: [['type' => 'i32', 'value' => '12']],
            line: 627,
        );
    }

    #[Depends('testAssertReturn17')]
    public function testAssertReturn18(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'a', 'args' => []],
            expected: [['type' => 'i32', 'value' => '13']],
            line: 628,
        );
    }

    #[Depends('testAssertReturn18')]
    public function testAssertReturn19(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'A', 'args' => []],
            expected: [['type' => 'i32', 'value' => '14']],
            line: 629,
        );
    }

    #[Depends('testAssertReturn19')]
    public function testAssertReturn20(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '﻿', 'args' => []],
            expected: [['type' => 'i32', 'value' => '15']],
            line: 630,
        );
    }

    #[Depends('testAssertReturn20')]
    public function testAssertReturn21(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Å', 'args' => []],
            expected: [['type' => 'i32', 'value' => '16']],
            line: 631,
        );
    }

    #[Depends('testAssertReturn21')]
    public function testAssertReturn22(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Å', 'args' => []],
            expected: [['type' => 'i32', 'value' => '17']],
            line: 632,
        );
    }

    #[Depends('testAssertReturn22')]
    public function testAssertReturn23(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Å', 'args' => []],
            expected: [['type' => 'i32', 'value' => '18']],
            line: 633,
        );
    }

    #[Depends('testAssertReturn23')]
    public function testAssertReturn24(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ﬃ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '19']],
            line: 634,
        );
    }

    #[Depends('testAssertReturn24')]
    public function testAssertReturn25(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'fﬁ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '20']],
            line: 635,
        );
    }

    #[Depends('testAssertReturn25')]
    public function testAssertReturn26(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ffi', 'args' => []],
            expected: [['type' => 'i32', 'value' => '21']],
            line: 636,
        );
    }

    #[Depends('testAssertReturn26')]
    public function testAssertReturn27(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => ' 	
', 'args' => []],
            expected: [['type' => 'i32', 'value' => '22']],
            line: 637,
        );
    }

    #[Depends('testAssertReturn27')]
    public function testAssertReturn28(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '', 'args' => []],
            expected: [['type' => 'i32', 'value' => '23']],
            line: 638,
        );
    }

    #[Depends('testAssertReturn28')]
    public function testAssertReturn29(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => ' ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '24']],
            line: 639,
        );
    }

    #[Depends('testAssertReturn29')]
    public function testAssertReturn30(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '', 'args' => []],
            expected: [['type' => 'i32', 'value' => '25']],
            line: 640,
        );
    }

    #[Depends('testAssertReturn30')]
    public function testAssertReturn31(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '', 'args' => []],
            expected: [['type' => 'i32', 'value' => '26']],
            line: 641,
        );
    }

    #[Depends('testAssertReturn31')]
    public function testAssertReturn32(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '￰￱￲￳￴￵￶￷', 'args' => []],
            expected: [['type' => 'i32', 'value' => '27']],
            line: 642,
        );
    }

    #[Depends('testAssertReturn32')]
    public function testAssertReturn33(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '￸￹￺￻￼�￾￿', 'args' => []],
            expected: [['type' => 'i32', 'value' => '28']],
            line: 643,
        );
    }

    #[Depends('testAssertReturn33')]
    public function testAssertReturn34(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '␀␁␂␃␄␅␆␇␈␉␊␋␌␍␎␏', 'args' => []],
            expected: [['type' => 'i32', 'value' => '29']],
            line: 644,
        );
    }

    #[Depends('testAssertReturn34')]
    public function testAssertReturn35(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '␐␑␒␓␔␕␖␗␘␙␚␛␜␝␞␟', 'args' => []],
            expected: [['type' => 'i32', 'value' => '30']],
            line: 645,
        );
    }

    #[Depends('testAssertReturn35')]
    public function testAssertReturn36(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '␠␡', 'args' => []],
            expected: [['type' => 'i32', 'value' => '31']],
            line: 646,
        );
    }

    #[Depends('testAssertReturn36')]
    public function testAssertReturn37(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '￰￱￲￳￴￵￶￷￸￹￺￻￼�', 'args' => []],
            expected: [['type' => 'i32', 'value' => '32']],
            line: 647,
        );
    }

    #[Depends('testAssertReturn37')]
    public function testAssertReturn38(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '‍', 'args' => []],
            expected: [['type' => 'i32', 'value' => '33']],
            line: 648,
        );
    }

    #[Depends('testAssertReturn38')]
    public function testAssertReturn39(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '‌', 'args' => []],
            expected: [['type' => 'i32', 'value' => '34']],
            line: 649,
        );
    }

    #[Depends('testAssertReturn39')]
    public function testAssertReturn40(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '͏', 'args' => []],
            expected: [['type' => 'i32', 'value' => '35']],
            line: 650,
        );
    }

    #[Depends('testAssertReturn40')]
    public function testAssertReturn41(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '⁠', 'args' => []],
            expected: [['type' => 'i32', 'value' => '36']],
            line: 651,
        );
    }

    #[Depends('testAssertReturn41')]
    public function testAssertReturn42(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '⵿', 'args' => []],
            expected: [['type' => 'i32', 'value' => '37']],
            line: 652,
        );
    }

    #[Depends('testAssertReturn42')]
    public function testAssertReturn43(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𑁿', 'args' => []],
            expected: [['type' => 'i32', 'value' => '38']],
            line: 653,
        );
    }

    #[Depends('testAssertReturn43')]
    public function testAssertReturn44(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '᠎', 'args' => []],
            expected: [['type' => 'i32', 'value' => '39']],
            line: 654,
        );
    }

    #[Depends('testAssertReturn44')]
    public function testAssertReturn45(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '￯​ ­⁠ ‮‭', 'args' => []],
            expected: [['type' => 'i32', 'value' => '40']],
            line: 655,
        );
    }

    #[Depends('testAssertReturn45')]
    public function testAssertReturn46(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '‎‏‑  ‪‫‬ ⁦⁧⁨⁩', 'args' => []],
            expected: [['type' => 'i32', 'value' => '41']],
            line: 656,
        );
    }

    #[Depends('testAssertReturn46')]
    public function testAssertReturn47(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '⁪⁫⁬⁭⁮⁯', 'args' => []],
            expected: [['type' => 'i32', 'value' => '42']],
            line: 657,
        );
    }

    #[Depends('testAssertReturn47')]
    public function testAssertReturn48(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '⁡⁢⁣⁤', 'args' => []],
            expected: [['type' => 'i32', 'value' => '43']],
            line: 658,
        );
    }

    #[Depends('testAssertReturn48')]
    public function testAssertReturn49(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𐀀󟿿􏿿', 'args' => []],
            expected: [['type' => 'i32', 'value' => '44']],
            line: 659,
        );
    }

    #[Depends('testAssertReturn49')]
    public function testAssertReturn50(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Z̴͇̫̥̪͓͈͔͎̗̞̺̯̱̞̙̱̜̖̠̏͆̆͛͌͘͞ḁ̶̰̳̭͙̲̱̹̝͎̼͗ͨ̎̄̆͗̿̀́͟͡l̶̷͉̩̹̫̝͖̙̲̼͇͚͍̮͎̥̞̈́͊͗ͦ̈́ͫ̇́̚ͅͅg̶͕͔͚̩̓̐̅ͮ̔̐̎̂̏̾͊̍͋͊ͧ́̆ͦ͞o̡͋̔͐ͪͩ͏̢̧̫̙̤̮͖͙͓̺̜̩̼̘̠́', 'args' => []],
            expected: [['type' => 'i32', 'value' => '45']],
            line: 660,
        );
    }

    #[Depends('testAssertReturn50')]
    public function testAssertReturn51(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ᅟᅠㅤﾠ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '46']],
            line: 661,
        );
    }

    #[Depends('testAssertReturn51')]
    public function testAssertReturn52(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '︀', 'args' => []],
            expected: [['type' => 'i32', 'value' => '47']],
            line: 662,
        );
    }

    #[Depends('testAssertReturn52')]
    public function testAssertReturn53(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '︄', 'args' => []],
            expected: [['type' => 'i32', 'value' => '48']],
            line: 663,
        );
    }

    #[Depends('testAssertReturn53')]
    public function testAssertReturn54(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '󠄀', 'args' => []],
            expected: [['type' => 'i32', 'value' => '49']],
            line: 664,
        );
    }

    #[Depends('testAssertReturn54')]
    public function testAssertReturn55(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '󠇯', 'args' => []],
            expected: [['type' => 'i32', 'value' => '50']],
            line: 665,
        );
    }

    #[Depends('testAssertReturn55')]
    public function testAssertReturn56(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '̈', 'args' => []],
            expected: [['type' => 'i32', 'value' => '51']],
            line: 666,
        );
    }

    #[Depends('testAssertReturn56')]
    public function testAssertReturn57(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '
', 'args' => []],
            expected: [['type' => 'i32', 'value' => '52']],
            line: 667,
        );
    }

    #[Depends('testAssertReturn57')]
    public function testAssertReturn58(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '␤', 'args' => []],
            expected: [['type' => 'i32', 'value' => '53']],
            line: 668,
        );
    }

    #[Depends('testAssertReturn58')]
    public function testAssertReturn59(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => ' ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '54']],
            line: 669,
        );
    }

    #[Depends('testAssertReturn59')]
    public function testAssertReturn60(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '', 'args' => []],
            expected: [['type' => 'i32', 'value' => '55']],
            line: 670,
        );
    }

    #[Depends('testAssertReturn60')]
    public function testAssertReturn61(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '
', 'args' => []],
            expected: [['type' => 'i32', 'value' => '56']],
            line: 671,
        );
    }

    #[Depends('testAssertReturn61')]
    public function testAssertReturn62(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '
', 'args' => []],
            expected: [['type' => 'i32', 'value' => '57']],
            line: 672,
        );
    }

    #[Depends('testAssertReturn62')]
    public function testAssertReturn63(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '', 'args' => []],
            expected: [['type' => 'i32', 'value' => '58']],
            line: 673,
        );
    }

    #[Depends('testAssertReturn63')]
    public function testAssertReturn64(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '', 'args' => []],
            expected: [['type' => 'i32', 'value' => '59']],
            line: 674,
        );
    }

    #[Depends('testAssertReturn64')]
    public function testAssertReturn65(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '', 'args' => []],
            expected: [['type' => 'i32', 'value' => '60']],
            line: 675,
        );
    }

    #[Depends('testAssertReturn65')]
    public function testAssertReturn66(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '', 'args' => []],
            expected: [['type' => 'i32', 'value' => '61']],
            line: 676,
        );
    }

    #[Depends('testAssertReturn66')]
    public function testAssertReturn67(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => ' ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '62']],
            line: 677,
        );
    }

    #[Depends('testAssertReturn67')]
    public function testAssertReturn68(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '…', 'args' => []],
            expected: [['type' => 'i32', 'value' => '63']],
            line: 678,
        );
    }

    #[Depends('testAssertReturn68')]
    public function testAssertReturn69(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '⏎', 'args' => []],
            expected: [['type' => 'i32', 'value' => '64']],
            line: 679,
        );
    }

    #[Depends('testAssertReturn69')]
    public function testAssertReturn70(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '', 'args' => []],
            expected: [['type' => 'i32', 'value' => '65']],
            line: 680,
        );
    }

    #[Depends('testAssertReturn70')]
    public function testAssertReturn71(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '', 'args' => []],
            expected: [['type' => 'i32', 'value' => '66']],
            line: 681,
        );
    }

    #[Depends('testAssertReturn71')]
    public function testAssertReturn72(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '', 'args' => []],
            expected: [['type' => 'i32', 'value' => '67']],
            line: 682,
        );
    }

    #[Depends('testAssertReturn72')]
    public function testAssertReturn73(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '↵', 'args' => []],
            expected: [['type' => 'i32', 'value' => '68']],
            line: 683,
        );
    }

    #[Depends('testAssertReturn73')]
    public function testAssertReturn74(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '↩', 'args' => []],
            expected: [['type' => 'i32', 'value' => '69']],
            line: 684,
        );
    }

    #[Depends('testAssertReturn74')]
    public function testAssertReturn75(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '⌤', 'args' => []],
            expected: [['type' => 'i32', 'value' => '70']],
            line: 685,
        );
    }

    #[Depends('testAssertReturn75')]
    public function testAssertReturn76(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '⤶', 'args' => []],
            expected: [['type' => 'i32', 'value' => '71']],
            line: 686,
        );
    }

    #[Depends('testAssertReturn76')]
    public function testAssertReturn77(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '↲', 'args' => []],
            expected: [['type' => 'i32', 'value' => '72']],
            line: 687,
        );
    }

    #[Depends('testAssertReturn77')]
    public function testAssertReturn78(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '⮨', 'args' => []],
            expected: [['type' => 'i32', 'value' => '73']],
            line: 688,
        );
    }

    #[Depends('testAssertReturn78')]
    public function testAssertReturn79(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '⮰', 'args' => []],
            expected: [['type' => 'i32', 'value' => '74']],
            line: 689,
        );
    }

    #[Depends('testAssertReturn79')]
    public function testAssertReturn80(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '�', 'args' => []],
            expected: [['type' => 'i32', 'value' => '75']],
            line: 690,
        );
    }

    #[Depends('testAssertReturn80')]
    public function testAssertReturn81(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '﷐', 'args' => []],
            expected: [['type' => 'i32', 'value' => '76']],
            line: 691,
        );
    }

    #[Depends('testAssertReturn81')]
    public function testAssertReturn82(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '﷑', 'args' => []],
            expected: [['type' => 'i32', 'value' => '77']],
            line: 692,
        );
    }

    #[Depends('testAssertReturn82')]
    public function testAssertReturn83(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '﷒', 'args' => []],
            expected: [['type' => 'i32', 'value' => '78']],
            line: 693,
        );
    }

    #[Depends('testAssertReturn83')]
    public function testAssertReturn84(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '﷓', 'args' => []],
            expected: [['type' => 'i32', 'value' => '79']],
            line: 694,
        );
    }

    #[Depends('testAssertReturn84')]
    public function testAssertReturn85(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '﷔', 'args' => []],
            expected: [['type' => 'i32', 'value' => '80']],
            line: 695,
        );
    }

    #[Depends('testAssertReturn85')]
    public function testAssertReturn86(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '﷕', 'args' => []],
            expected: [['type' => 'i32', 'value' => '81']],
            line: 696,
        );
    }

    #[Depends('testAssertReturn86')]
    public function testAssertReturn87(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '﷖', 'args' => []],
            expected: [['type' => 'i32', 'value' => '82']],
            line: 697,
        );
    }

    #[Depends('testAssertReturn87')]
    public function testAssertReturn88(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '﷗', 'args' => []],
            expected: [['type' => 'i32', 'value' => '83']],
            line: 698,
        );
    }

    #[Depends('testAssertReturn88')]
    public function testAssertReturn89(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '﷘', 'args' => []],
            expected: [['type' => 'i32', 'value' => '84']],
            line: 699,
        );
    }

    #[Depends('testAssertReturn89')]
    public function testAssertReturn90(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '﷙', 'args' => []],
            expected: [['type' => 'i32', 'value' => '85']],
            line: 700,
        );
    }

    #[Depends('testAssertReturn90')]
    public function testAssertReturn91(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '﷚', 'args' => []],
            expected: [['type' => 'i32', 'value' => '86']],
            line: 701,
        );
    }

    #[Depends('testAssertReturn91')]
    public function testAssertReturn92(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '﷛', 'args' => []],
            expected: [['type' => 'i32', 'value' => '87']],
            line: 702,
        );
    }

    #[Depends('testAssertReturn92')]
    public function testAssertReturn93(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '﷜', 'args' => []],
            expected: [['type' => 'i32', 'value' => '88']],
            line: 703,
        );
    }

    #[Depends('testAssertReturn93')]
    public function testAssertReturn94(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '﷝', 'args' => []],
            expected: [['type' => 'i32', 'value' => '89']],
            line: 704,
        );
    }

    #[Depends('testAssertReturn94')]
    public function testAssertReturn95(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '﷞', 'args' => []],
            expected: [['type' => 'i32', 'value' => '90']],
            line: 705,
        );
    }

    #[Depends('testAssertReturn95')]
    public function testAssertReturn96(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '﷟', 'args' => []],
            expected: [['type' => 'i32', 'value' => '91']],
            line: 706,
        );
    }

    #[Depends('testAssertReturn96')]
    public function testAssertReturn97(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '﷠', 'args' => []],
            expected: [['type' => 'i32', 'value' => '92']],
            line: 707,
        );
    }

    #[Depends('testAssertReturn97')]
    public function testAssertReturn98(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '﷡', 'args' => []],
            expected: [['type' => 'i32', 'value' => '93']],
            line: 708,
        );
    }

    #[Depends('testAssertReturn98')]
    public function testAssertReturn99(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '﷢', 'args' => []],
            expected: [['type' => 'i32', 'value' => '94']],
            line: 709,
        );
    }

    #[Depends('testAssertReturn99')]
    public function testAssertReturn100(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '﷣', 'args' => []],
            expected: [['type' => 'i32', 'value' => '95']],
            line: 710,
        );
    }

    #[Depends('testAssertReturn100')]
    public function testAssertReturn101(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '﷤', 'args' => []],
            expected: [['type' => 'i32', 'value' => '96']],
            line: 711,
        );
    }

    #[Depends('testAssertReturn101')]
    public function testAssertReturn102(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '﷥', 'args' => []],
            expected: [['type' => 'i32', 'value' => '97']],
            line: 712,
        );
    }

    #[Depends('testAssertReturn102')]
    public function testAssertReturn103(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '﷦', 'args' => []],
            expected: [['type' => 'i32', 'value' => '98']],
            line: 713,
        );
    }

    #[Depends('testAssertReturn103')]
    public function testAssertReturn104(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '﷧', 'args' => []],
            expected: [['type' => 'i32', 'value' => '99']],
            line: 714,
        );
    }

    #[Depends('testAssertReturn104')]
    public function testAssertReturn105(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '﷨', 'args' => []],
            expected: [['type' => 'i32', 'value' => '100']],
            line: 715,
        );
    }

    #[Depends('testAssertReturn105')]
    public function testAssertReturn106(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '﷩', 'args' => []],
            expected: [['type' => 'i32', 'value' => '101']],
            line: 716,
        );
    }

    #[Depends('testAssertReturn106')]
    public function testAssertReturn107(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '﷪', 'args' => []],
            expected: [['type' => 'i32', 'value' => '102']],
            line: 717,
        );
    }

    #[Depends('testAssertReturn107')]
    public function testAssertReturn108(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '﷫', 'args' => []],
            expected: [['type' => 'i32', 'value' => '103']],
            line: 718,
        );
    }

    #[Depends('testAssertReturn108')]
    public function testAssertReturn109(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '﷬', 'args' => []],
            expected: [['type' => 'i32', 'value' => '104']],
            line: 719,
        );
    }

    #[Depends('testAssertReturn109')]
    public function testAssertReturn110(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '﷭', 'args' => []],
            expected: [['type' => 'i32', 'value' => '105']],
            line: 720,
        );
    }

    #[Depends('testAssertReturn110')]
    public function testAssertReturn111(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '﷮', 'args' => []],
            expected: [['type' => 'i32', 'value' => '106']],
            line: 721,
        );
    }

    #[Depends('testAssertReturn111')]
    public function testAssertReturn112(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '﷯', 'args' => []],
            expected: [['type' => 'i32', 'value' => '107']],
            line: 722,
        );
    }

    #[Depends('testAssertReturn112')]
    public function testAssertReturn113(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '￾', 'args' => []],
            expected: [['type' => 'i32', 'value' => '108']],
            line: 723,
        );
    }

    #[Depends('testAssertReturn113')]
    public function testAssertReturn114(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '￿', 'args' => []],
            expected: [['type' => 'i32', 'value' => '109']],
            line: 724,
        );
    }

    #[Depends('testAssertReturn114')]
    public function testAssertReturn115(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '🿾', 'args' => []],
            expected: [['type' => 'i32', 'value' => '110']],
            line: 725,
        );
    }

    #[Depends('testAssertReturn115')]
    public function testAssertReturn116(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '🿿', 'args' => []],
            expected: [['type' => 'i32', 'value' => '111']],
            line: 726,
        );
    }

    #[Depends('testAssertReturn116')]
    public function testAssertReturn117(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𯿾', 'args' => []],
            expected: [['type' => 'i32', 'value' => '112']],
            line: 727,
        );
    }

    #[Depends('testAssertReturn117')]
    public function testAssertReturn118(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𯿿', 'args' => []],
            expected: [['type' => 'i32', 'value' => '113']],
            line: 728,
        );
    }

    #[Depends('testAssertReturn118')]
    public function testAssertReturn119(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𿿾', 'args' => []],
            expected: [['type' => 'i32', 'value' => '114']],
            line: 729,
        );
    }

    #[Depends('testAssertReturn119')]
    public function testAssertReturn120(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𿿿', 'args' => []],
            expected: [['type' => 'i32', 'value' => '115']],
            line: 730,
        );
    }

    #[Depends('testAssertReturn120')]
    public function testAssertReturn121(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '񏿾', 'args' => []],
            expected: [['type' => 'i32', 'value' => '116']],
            line: 731,
        );
    }

    #[Depends('testAssertReturn121')]
    public function testAssertReturn122(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '񏿿', 'args' => []],
            expected: [['type' => 'i32', 'value' => '117']],
            line: 732,
        );
    }

    #[Depends('testAssertReturn122')]
    public function testAssertReturn123(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '񟿾', 'args' => []],
            expected: [['type' => 'i32', 'value' => '118']],
            line: 733,
        );
    }

    #[Depends('testAssertReturn123')]
    public function testAssertReturn124(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '񟿿', 'args' => []],
            expected: [['type' => 'i32', 'value' => '119']],
            line: 734,
        );
    }

    #[Depends('testAssertReturn124')]
    public function testAssertReturn125(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '񯿾', 'args' => []],
            expected: [['type' => 'i32', 'value' => '120']],
            line: 735,
        );
    }

    #[Depends('testAssertReturn125')]
    public function testAssertReturn126(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '񯿿', 'args' => []],
            expected: [['type' => 'i32', 'value' => '121']],
            line: 736,
        );
    }

    #[Depends('testAssertReturn126')]
    public function testAssertReturn127(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '񿿾', 'args' => []],
            expected: [['type' => 'i32', 'value' => '122']],
            line: 737,
        );
    }

    #[Depends('testAssertReturn127')]
    public function testAssertReturn128(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '񿿿', 'args' => []],
            expected: [['type' => 'i32', 'value' => '123']],
            line: 738,
        );
    }

    #[Depends('testAssertReturn128')]
    public function testAssertReturn129(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '򏿾', 'args' => []],
            expected: [['type' => 'i32', 'value' => '124']],
            line: 739,
        );
    }

    #[Depends('testAssertReturn129')]
    public function testAssertReturn130(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '򏿿', 'args' => []],
            expected: [['type' => 'i32', 'value' => '125']],
            line: 740,
        );
    }

    #[Depends('testAssertReturn130')]
    public function testAssertReturn131(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '򟿾', 'args' => []],
            expected: [['type' => 'i32', 'value' => '126']],
            line: 741,
        );
    }

    #[Depends('testAssertReturn131')]
    public function testAssertReturn132(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '򟿿', 'args' => []],
            expected: [['type' => 'i32', 'value' => '127']],
            line: 742,
        );
    }

    #[Depends('testAssertReturn132')]
    public function testAssertReturn133(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '򯿾', 'args' => []],
            expected: [['type' => 'i32', 'value' => '128']],
            line: 743,
        );
    }

    #[Depends('testAssertReturn133')]
    public function testAssertReturn134(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '򯿿', 'args' => []],
            expected: [['type' => 'i32', 'value' => '129']],
            line: 744,
        );
    }

    #[Depends('testAssertReturn134')]
    public function testAssertReturn135(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '򿿾', 'args' => []],
            expected: [['type' => 'i32', 'value' => '130']],
            line: 745,
        );
    }

    #[Depends('testAssertReturn135')]
    public function testAssertReturn136(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '򿿿', 'args' => []],
            expected: [['type' => 'i32', 'value' => '131']],
            line: 746,
        );
    }

    #[Depends('testAssertReturn136')]
    public function testAssertReturn137(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '󏿾', 'args' => []],
            expected: [['type' => 'i32', 'value' => '132']],
            line: 747,
        );
    }

    #[Depends('testAssertReturn137')]
    public function testAssertReturn138(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '󏿿', 'args' => []],
            expected: [['type' => 'i32', 'value' => '133']],
            line: 748,
        );
    }

    #[Depends('testAssertReturn138')]
    public function testAssertReturn139(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '󟿾', 'args' => []],
            expected: [['type' => 'i32', 'value' => '134']],
            line: 749,
        );
    }

    #[Depends('testAssertReturn139')]
    public function testAssertReturn140(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '󟿿', 'args' => []],
            expected: [['type' => 'i32', 'value' => '135']],
            line: 750,
        );
    }

    #[Depends('testAssertReturn140')]
    public function testAssertReturn141(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '󯿾', 'args' => []],
            expected: [['type' => 'i32', 'value' => '136']],
            line: 751,
        );
    }

    #[Depends('testAssertReturn141')]
    public function testAssertReturn142(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '󯿿', 'args' => []],
            expected: [['type' => 'i32', 'value' => '137']],
            line: 752,
        );
    }

    #[Depends('testAssertReturn142')]
    public function testAssertReturn143(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '󿿾', 'args' => []],
            expected: [['type' => 'i32', 'value' => '138']],
            line: 753,
        );
    }

    #[Depends('testAssertReturn143')]
    public function testAssertReturn144(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '󿿿', 'args' => []],
            expected: [['type' => 'i32', 'value' => '139']],
            line: 754,
        );
    }

    #[Depends('testAssertReturn144')]
    public function testAssertReturn145(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '􏿾', 'args' => []],
            expected: [['type' => 'i32', 'value' => '140']],
            line: 755,
        );
    }

    #[Depends('testAssertReturn145')]
    public function testAssertReturn146(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '􏿿', 'args' => []],
            expected: [['type' => 'i32', 'value' => '141']],
            line: 756,
        );
    }

    #[Depends('testAssertReturn146')]
    public function testAssertReturn147(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '̈‽̈̉', 'args' => []],
            expected: [['type' => 'i32', 'value' => '142']],
            line: 757,
        );
    }

    #[Depends('testAssertReturn147')]
    public function testAssertReturn148(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'abc', 'args' => []],
            expected: [['type' => 'i32', 'value' => '143']],
            line: 758,
        );
    }

    #[Depends('testAssertReturn148')]
    public function testAssertReturn149(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '‭abc', 'args' => []],
            expected: [['type' => 'i32', 'value' => '144']],
            line: 759,
        );
    }

    #[Depends('testAssertReturn149')]
    public function testAssertReturn150(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '‮cba', 'args' => []],
            expected: [['type' => 'i32', 'value' => '145']],
            line: 760,
        );
    }

    #[Depends('testAssertReturn150')]
    public function testAssertReturn151(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '‭abc‮', 'args' => []],
            expected: [['type' => 'i32', 'value' => '146']],
            line: 761,
        );
    }

    #[Depends('testAssertReturn151')]
    public function testAssertReturn152(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '‮cba‭', 'args' => []],
            expected: [['type' => 'i32', 'value' => '147']],
            line: 762,
        );
    }

    #[Depends('testAssertReturn152')]
    public function testAssertReturn153(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𝑨', 'args' => []],
            expected: [['type' => 'i32', 'value' => '148']],
            line: 763,
        );
    }

    #[Depends('testAssertReturn153')]
    public function testAssertReturn154(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𝐴', 'args' => []],
            expected: [['type' => 'i32', 'value' => '149']],
            line: 764,
        );
    }

    #[Depends('testAssertReturn154')]
    public function testAssertReturn155(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𝘈', 'args' => []],
            expected: [['type' => 'i32', 'value' => '150']],
            line: 765,
        );
    }

    #[Depends('testAssertReturn155')]
    public function testAssertReturn156(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𝘼', 'args' => []],
            expected: [['type' => 'i32', 'value' => '151']],
            line: 766,
        );
    }

    #[Depends('testAssertReturn156')]
    public function testAssertReturn157(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𝐀', 'args' => []],
            expected: [['type' => 'i32', 'value' => '152']],
            line: 767,
        );
    }

    #[Depends('testAssertReturn157')]
    public function testAssertReturn158(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𝓐', 'args' => []],
            expected: [['type' => 'i32', 'value' => '153']],
            line: 768,
        );
    }

    #[Depends('testAssertReturn158')]
    public function testAssertReturn159(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𝕬', 'args' => []],
            expected: [['type' => 'i32', 'value' => '154']],
            line: 769,
        );
    }

    #[Depends('testAssertReturn159')]
    public function testAssertReturn160(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𝗔', 'args' => []],
            expected: [['type' => 'i32', 'value' => '155']],
            line: 770,
        );
    }

    #[Depends('testAssertReturn160')]
    public function testAssertReturn161(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𝒜', 'args' => []],
            expected: [['type' => 'i32', 'value' => '156']],
            line: 771,
        );
    }

    #[Depends('testAssertReturn161')]
    public function testAssertReturn162(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𝔄', 'args' => []],
            expected: [['type' => 'i32', 'value' => '157']],
            line: 772,
        );
    }

    #[Depends('testAssertReturn162')]
    public function testAssertReturn163(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𝔸', 'args' => []],
            expected: [['type' => 'i32', 'value' => '158']],
            line: 773,
        );
    }

    #[Depends('testAssertReturn163')]
    public function testAssertReturn164(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𝖠', 'args' => []],
            expected: [['type' => 'i32', 'value' => '159']],
            line: 774,
        );
    }

    #[Depends('testAssertReturn164')]
    public function testAssertReturn165(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𝙰', 'args' => []],
            expected: [['type' => 'i32', 'value' => '160']],
            line: 775,
        );
    }

    #[Depends('testAssertReturn165')]
    public function testAssertReturn166(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ᴀ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '161']],
            line: 776,
        );
    }

    #[Depends('testAssertReturn166')]
    public function testAssertReturn167(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ᴬ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '162']],
            line: 777,
        );
    }

    #[Depends('testAssertReturn167')]
    public function testAssertReturn168(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ⓐ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '163']],
            line: 778,
        );
    }

    #[Depends('testAssertReturn168')]
    public function testAssertReturn169(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ａ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '164']],
            line: 779,
        );
    }

    #[Depends('testAssertReturn169')]
    public function testAssertReturn170(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '🄐', 'args' => []],
            expected: [['type' => 'i32', 'value' => '165']],
            line: 780,
        );
    }

    #[Depends('testAssertReturn170')]
    public function testAssertReturn171(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '🄰', 'args' => []],
            expected: [['type' => 'i32', 'value' => '166']],
            line: 781,
        );
    }

    #[Depends('testAssertReturn171')]
    public function testAssertReturn172(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '󠁁', 'args' => []],
            expected: [['type' => 'i32', 'value' => '167']],
            line: 782,
        );
    }

    #[Depends('testAssertReturn172')]
    public function testAssertReturn173(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'U+0041', 'args' => []],
            expected: [['type' => 'i32', 'value' => '168']],
            line: 783,
        );
    }

    #[Depends('testAssertReturn173')]
    public function testAssertReturn174(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'A​', 'args' => []],
            expected: [['type' => 'i32', 'value' => '169']],
            line: 784,
        );
    }

    #[Depends('testAssertReturn174')]
    public function testAssertReturn175(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'А', 'args' => []],
            expected: [['type' => 'i32', 'value' => '170']],
            line: 785,
        );
    }

    #[Depends('testAssertReturn175')]
    public function testAssertReturn176(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ꙗ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '171']],
            line: 786,
        );
    }

    #[Depends('testAssertReturn176')]
    public function testAssertReturn177(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ⷼ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '172']],
            line: 787,
        );
    }

    #[Depends('testAssertReturn177')]
    public function testAssertReturn178(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ⷶ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '173']],
            line: 788,
        );
    }

    #[Depends('testAssertReturn178')]
    public function testAssertReturn179(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ɐ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '174']],
            line: 789,
        );
    }

    #[Depends('testAssertReturn179')]
    public function testAssertReturn180(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '🅐', 'args' => []],
            expected: [['type' => 'i32', 'value' => '175']],
            line: 790,
        );
    }

    #[Depends('testAssertReturn180')]
    public function testAssertReturn181(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '🅰', 'args' => []],
            expected: [['type' => 'i32', 'value' => '176']],
            line: 791,
        );
    }

    #[Depends('testAssertReturn181')]
    public function testAssertReturn182(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ⱝ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '177']],
            line: 792,
        );
    }

    #[Depends('testAssertReturn182')]
    public function testAssertReturn183(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𐐂', 'args' => []],
            expected: [['type' => 'i32', 'value' => '178']],
            line: 793,
        );
    }

    #[Depends('testAssertReturn183')]
    public function testAssertReturn184(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𐐈', 'args' => []],
            expected: [['type' => 'i32', 'value' => '179']],
            line: 794,
        );
    }

    #[Depends('testAssertReturn184')]
    public function testAssertReturn185(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𐒰', 'args' => []],
            expected: [['type' => 'i32', 'value' => '180']],
            line: 795,
        );
    }

    #[Depends('testAssertReturn185')]
    public function testAssertReturn186(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'À', 'args' => []],
            expected: [['type' => 'i32', 'value' => '181']],
            line: 796,
        );
    }

    #[Depends('testAssertReturn186')]
    public function testAssertReturn187(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Á', 'args' => []],
            expected: [['type' => 'i32', 'value' => '182']],
            line: 797,
        );
    }

    #[Depends('testAssertReturn187')]
    public function testAssertReturn188(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Â', 'args' => []],
            expected: [['type' => 'i32', 'value' => '183']],
            line: 798,
        );
    }

    #[Depends('testAssertReturn188')]
    public function testAssertReturn189(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ã', 'args' => []],
            expected: [['type' => 'i32', 'value' => '184']],
            line: 799,
        );
    }

    #[Depends('testAssertReturn189')]
    public function testAssertReturn190(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ä', 'args' => []],
            expected: [['type' => 'i32', 'value' => '185']],
            line: 800,
        );
    }

    #[Depends('testAssertReturn190')]
    public function testAssertReturn191(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ā', 'args' => []],
            expected: [['type' => 'i32', 'value' => '186']],
            line: 801,
        );
    }

    #[Depends('testAssertReturn191')]
    public function testAssertReturn192(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ă', 'args' => []],
            expected: [['type' => 'i32', 'value' => '187']],
            line: 802,
        );
    }

    #[Depends('testAssertReturn192')]
    public function testAssertReturn193(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ą', 'args' => []],
            expected: [['type' => 'i32', 'value' => '188']],
            line: 803,
        );
    }

    #[Depends('testAssertReturn193')]
    public function testAssertReturn194(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ǎ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '189']],
            line: 804,
        );
    }

    #[Depends('testAssertReturn194')]
    public function testAssertReturn195(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ǟ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '190']],
            line: 805,
        );
    }

    #[Depends('testAssertReturn195')]
    public function testAssertReturn196(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ǡ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '191']],
            line: 806,
        );
    }

    #[Depends('testAssertReturn196')]
    public function testAssertReturn197(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ǻ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '192']],
            line: 807,
        );
    }

    #[Depends('testAssertReturn197')]
    public function testAssertReturn198(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ȁ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '193']],
            line: 808,
        );
    }

    #[Depends('testAssertReturn198')]
    public function testAssertReturn199(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ȃ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '194']],
            line: 809,
        );
    }

    #[Depends('testAssertReturn199')]
    public function testAssertReturn200(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ȧ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '195']],
            line: 810,
        );
    }

    #[Depends('testAssertReturn200')]
    public function testAssertReturn201(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ⱥ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '196']],
            line: 811,
        );
    }

    #[Depends('testAssertReturn201')]
    public function testAssertReturn202(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ӑ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '197']],
            line: 812,
        );
    }

    #[Depends('testAssertReturn202')]
    public function testAssertReturn203(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ӓ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '198']],
            line: 813,
        );
    }

    #[Depends('testAssertReturn203')]
    public function testAssertReturn204(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ߊ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '199']],
            line: 814,
        );
    }

    #[Depends('testAssertReturn204')]
    public function testAssertReturn205(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ࠡ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '200']],
            line: 815,
        );
    }

    #[Depends('testAssertReturn205')]
    public function testAssertReturn206(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ࠢ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '201']],
            line: 816,
        );
    }

    #[Depends('testAssertReturn206')]
    public function testAssertReturn207(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ࠣ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '202']],
            line: 817,
        );
    }

    #[Depends('testAssertReturn207')]
    public function testAssertReturn208(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ࠤ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '203']],
            line: 818,
        );
    }

    #[Depends('testAssertReturn208')]
    public function testAssertReturn209(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ࠥ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '204']],
            line: 819,
        );
    }

    #[Depends('testAssertReturn209')]
    public function testAssertReturn210(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ऄ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '205']],
            line: 820,
        );
    }

    #[Depends('testAssertReturn210')]
    public function testAssertReturn211(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'अ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '206']],
            line: 821,
        );
    }

    #[Depends('testAssertReturn211')]
    public function testAssertReturn212(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ॲ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '207']],
            line: 822,
        );
    }

    #[Depends('testAssertReturn212')]
    public function testAssertReturn213(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'অ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '208']],
            line: 823,
        );
    }

    #[Depends('testAssertReturn213')]
    public function testAssertReturn214(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ਅ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '209']],
            line: 824,
        );
    }

    #[Depends('testAssertReturn214')]
    public function testAssertReturn215(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'અ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '210']],
            line: 825,
        );
    }

    #[Depends('testAssertReturn215')]
    public function testAssertReturn216(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ଅ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '211']],
            line: 826,
        );
    }

    #[Depends('testAssertReturn216')]
    public function testAssertReturn217(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'அ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '212']],
            line: 827,
        );
    }

    #[Depends('testAssertReturn217')]
    public function testAssertReturn218(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'అ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '213']],
            line: 828,
        );
    }

    #[Depends('testAssertReturn218')]
    public function testAssertReturn219(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ಅ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '214']],
            line: 829,
        );
    }

    #[Depends('testAssertReturn219')]
    public function testAssertReturn220(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'അ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '215']],
            line: 830,
        );
    }

    #[Depends('testAssertReturn220')]
    public function testAssertReturn221(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ะ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '216']],
            line: 831,
        );
    }

    #[Depends('testAssertReturn221')]
    public function testAssertReturn222(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ະ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '217']],
            line: 832,
        );
    }

    #[Depends('testAssertReturn222')]
    public function testAssertReturn223(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '༁', 'args' => []],
            expected: [['type' => 'i32', 'value' => '218']],
            line: 833,
        );
    }

    #[Depends('testAssertReturn223')]
    public function testAssertReturn224(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ཨ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '219']],
            line: 834,
        );
    }

    #[Depends('testAssertReturn224')]
    public function testAssertReturn225(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ྸ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '220']],
            line: 835,
        );
    }

    #[Depends('testAssertReturn225')]
    public function testAssertReturn226(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'အ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '221']],
            line: 836,
        );
    }

    #[Depends('testAssertReturn226')]
    public function testAssertReturn227(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ဢ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '222']],
            line: 837,
        );
    }

    #[Depends('testAssertReturn227')]
    public function testAssertReturn228(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ႜ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '223']],
            line: 838,
        );
    }

    #[Depends('testAssertReturn228')]
    public function testAssertReturn229(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ᅡ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '224']],
            line: 839,
        );
    }

    #[Depends('testAssertReturn229')]
    public function testAssertReturn230(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'አ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '225']],
            line: 840,
        );
    }

    #[Depends('testAssertReturn230')]
    public function testAssertReturn231(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ዐ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '226']],
            line: 841,
        );
    }

    #[Depends('testAssertReturn231')]
    public function testAssertReturn232(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ꭰ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '227']],
            line: 842,
        );
    }

    #[Depends('testAssertReturn232')]
    public function testAssertReturn233(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ᐊ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '228']],
            line: 843,
        );
    }

    #[Depends('testAssertReturn233')]
    public function testAssertReturn234(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ᖳ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '229']],
            line: 844,
        );
    }

    #[Depends('testAssertReturn234')]
    public function testAssertReturn235(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ᚨ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '230']],
            line: 845,
        );
    }

    #[Depends('testAssertReturn235')]
    public function testAssertReturn236(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ᚪ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '231']],
            line: 846,
        );
    }

    #[Depends('testAssertReturn236')]
    public function testAssertReturn237(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ᛆ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '232']],
            line: 847,
        );
    }

    #[Depends('testAssertReturn237')]
    public function testAssertReturn238(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ᜀ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '233']],
            line: 848,
        );
    }

    #[Depends('testAssertReturn238')]
    public function testAssertReturn239(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ᜠ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '234']],
            line: 849,
        );
    }

    #[Depends('testAssertReturn239')]
    public function testAssertReturn240(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ᝀ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '235']],
            line: 850,
        );
    }

    #[Depends('testAssertReturn240')]
    public function testAssertReturn241(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ᝠ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '236']],
            line: 851,
        );
    }

    #[Depends('testAssertReturn241')]
    public function testAssertReturn242(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ᠠ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '237']],
            line: 852,
        );
    }

    #[Depends('testAssertReturn242')]
    public function testAssertReturn243(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ᢇ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '238']],
            line: 853,
        );
    }

    #[Depends('testAssertReturn243')]
    public function testAssertReturn244(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ᤠ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '239']],
            line: 854,
        );
    }

    #[Depends('testAssertReturn244')]
    public function testAssertReturn245(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ᥣ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '240']],
            line: 855,
        );
    }

    #[Depends('testAssertReturn245')]
    public function testAssertReturn246(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ᨕ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '241']],
            line: 856,
        );
    }

    #[Depends('testAssertReturn246')]
    public function testAssertReturn247(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ᩋ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '242']],
            line: 857,
        );
    }

    #[Depends('testAssertReturn247')]
    public function testAssertReturn248(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ᩡ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '243']],
            line: 858,
        );
    }

    #[Depends('testAssertReturn248')]
    public function testAssertReturn249(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ᮃ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '244']],
            line: 859,
        );
    }

    #[Depends('testAssertReturn249')]
    public function testAssertReturn250(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ᯀ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '245']],
            line: 860,
        );
    }

    #[Depends('testAssertReturn250')]
    public function testAssertReturn251(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ᯁ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '246']],
            line: 861,
        );
    }

    #[Depends('testAssertReturn251')]
    public function testAssertReturn252(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ᰣ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '247']],
            line: 862,
        );
    }

    #[Depends('testAssertReturn252')]
    public function testAssertReturn253(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ḁ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '248']],
            line: 863,
        );
    }

    #[Depends('testAssertReturn253')]
    public function testAssertReturn254(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ạ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '249']],
            line: 864,
        );
    }

    #[Depends('testAssertReturn254')]
    public function testAssertReturn255(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ả', 'args' => []],
            expected: [['type' => 'i32', 'value' => '250']],
            line: 865,
        );
    }

    #[Depends('testAssertReturn255')]
    public function testAssertReturn256(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ấ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '251']],
            line: 866,
        );
    }

    #[Depends('testAssertReturn256')]
    public function testAssertReturn257(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ầ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '252']],
            line: 867,
        );
    }

    #[Depends('testAssertReturn257')]
    public function testAssertReturn258(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ẩ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '253']],
            line: 868,
        );
    }

    #[Depends('testAssertReturn258')]
    public function testAssertReturn259(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ẫ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '254']],
            line: 869,
        );
    }

    #[Depends('testAssertReturn259')]
    public function testAssertReturn260(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ậ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '255']],
            line: 870,
        );
    }

    #[Depends('testAssertReturn260')]
    public function testAssertReturn261(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ắ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '256']],
            line: 871,
        );
    }

    #[Depends('testAssertReturn261')]
    public function testAssertReturn262(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ằ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '257']],
            line: 872,
        );
    }

    #[Depends('testAssertReturn262')]
    public function testAssertReturn263(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ẳ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '258']],
            line: 873,
        );
    }

    #[Depends('testAssertReturn263')]
    public function testAssertReturn264(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ẵ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '259']],
            line: 874,
        );
    }

    #[Depends('testAssertReturn264')]
    public function testAssertReturn265(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ặ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '260']],
            line: 875,
        );
    }

    #[Depends('testAssertReturn265')]
    public function testAssertReturn266(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'あ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '261']],
            line: 876,
        );
    }

    #[Depends('testAssertReturn266')]
    public function testAssertReturn267(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ア', 'args' => []],
            expected: [['type' => 'i32', 'value' => '262']],
            line: 877,
        );
    }

    #[Depends('testAssertReturn267')]
    public function testAssertReturn268(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ㄚ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '263']],
            line: 878,
        );
    }

    #[Depends('testAssertReturn268')]
    public function testAssertReturn269(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ㅏ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '264']],
            line: 879,
        );
    }

    #[Depends('testAssertReturn269')]
    public function testAssertReturn270(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '㈎', 'args' => []],
            expected: [['type' => 'i32', 'value' => '265']],
            line: 880,
        );
    }

    #[Depends('testAssertReturn270')]
    public function testAssertReturn271(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '㈏', 'args' => []],
            expected: [['type' => 'i32', 'value' => '266']],
            line: 881,
        );
    }

    #[Depends('testAssertReturn271')]
    public function testAssertReturn272(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '㈐', 'args' => []],
            expected: [['type' => 'i32', 'value' => '267']],
            line: 882,
        );
    }

    #[Depends('testAssertReturn272')]
    public function testAssertReturn273(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '㈑', 'args' => []],
            expected: [['type' => 'i32', 'value' => '268']],
            line: 883,
        );
    }

    #[Depends('testAssertReturn273')]
    public function testAssertReturn274(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '㈒', 'args' => []],
            expected: [['type' => 'i32', 'value' => '269']],
            line: 884,
        );
    }

    #[Depends('testAssertReturn274')]
    public function testAssertReturn275(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '㈓', 'args' => []],
            expected: [['type' => 'i32', 'value' => '270']],
            line: 885,
        );
    }

    #[Depends('testAssertReturn275')]
    public function testAssertReturn276(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '㈔', 'args' => []],
            expected: [['type' => 'i32', 'value' => '271']],
            line: 886,
        );
    }

    #[Depends('testAssertReturn276')]
    public function testAssertReturn277(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '㈕', 'args' => []],
            expected: [['type' => 'i32', 'value' => '272']],
            line: 887,
        );
    }

    #[Depends('testAssertReturn277')]
    public function testAssertReturn278(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '㈖', 'args' => []],
            expected: [['type' => 'i32', 'value' => '273']],
            line: 888,
        );
    }

    #[Depends('testAssertReturn278')]
    public function testAssertReturn279(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '㈗', 'args' => []],
            expected: [['type' => 'i32', 'value' => '274']],
            line: 889,
        );
    }

    #[Depends('testAssertReturn279')]
    public function testAssertReturn280(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '㈘', 'args' => []],
            expected: [['type' => 'i32', 'value' => '275']],
            line: 890,
        );
    }

    #[Depends('testAssertReturn280')]
    public function testAssertReturn281(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '㈙', 'args' => []],
            expected: [['type' => 'i32', 'value' => '276']],
            line: 891,
        );
    }

    #[Depends('testAssertReturn281')]
    public function testAssertReturn282(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '㈚', 'args' => []],
            expected: [['type' => 'i32', 'value' => '277']],
            line: 892,
        );
    }

    #[Depends('testAssertReturn282')]
    public function testAssertReturn283(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '㈛', 'args' => []],
            expected: [['type' => 'i32', 'value' => '278']],
            line: 893,
        );
    }

    #[Depends('testAssertReturn283')]
    public function testAssertReturn284(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '㉮', 'args' => []],
            expected: [['type' => 'i32', 'value' => '279']],
            line: 894,
        );
    }

    #[Depends('testAssertReturn284')]
    public function testAssertReturn285(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '㉯', 'args' => []],
            expected: [['type' => 'i32', 'value' => '280']],
            line: 895,
        );
    }

    #[Depends('testAssertReturn285')]
    public function testAssertReturn286(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '㉰', 'args' => []],
            expected: [['type' => 'i32', 'value' => '281']],
            line: 896,
        );
    }

    #[Depends('testAssertReturn286')]
    public function testAssertReturn287(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '㉱', 'args' => []],
            expected: [['type' => 'i32', 'value' => '282']],
            line: 897,
        );
    }

    #[Depends('testAssertReturn287')]
    public function testAssertReturn288(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '㉲', 'args' => []],
            expected: [['type' => 'i32', 'value' => '283']],
            line: 898,
        );
    }

    #[Depends('testAssertReturn288')]
    public function testAssertReturn289(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '㉳', 'args' => []],
            expected: [['type' => 'i32', 'value' => '284']],
            line: 899,
        );
    }

    #[Depends('testAssertReturn289')]
    public function testAssertReturn290(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '㉴', 'args' => []],
            expected: [['type' => 'i32', 'value' => '285']],
            line: 900,
        );
    }

    #[Depends('testAssertReturn290')]
    public function testAssertReturn291(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '㉵', 'args' => []],
            expected: [['type' => 'i32', 'value' => '286']],
            line: 901,
        );
    }

    #[Depends('testAssertReturn291')]
    public function testAssertReturn292(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '㉶', 'args' => []],
            expected: [['type' => 'i32', 'value' => '287']],
            line: 902,
        );
    }

    #[Depends('testAssertReturn292')]
    public function testAssertReturn293(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '㉷', 'args' => []],
            expected: [['type' => 'i32', 'value' => '288']],
            line: 903,
        );
    }

    #[Depends('testAssertReturn293')]
    public function testAssertReturn294(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '㉸', 'args' => []],
            expected: [['type' => 'i32', 'value' => '289']],
            line: 904,
        );
    }

    #[Depends('testAssertReturn294')]
    public function testAssertReturn295(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '㉹', 'args' => []],
            expected: [['type' => 'i32', 'value' => '290']],
            line: 905,
        );
    }

    #[Depends('testAssertReturn295')]
    public function testAssertReturn296(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '㉺', 'args' => []],
            expected: [['type' => 'i32', 'value' => '291']],
            line: 906,
        );
    }

    #[Depends('testAssertReturn296')]
    public function testAssertReturn297(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '㉻', 'args' => []],
            expected: [['type' => 'i32', 'value' => '292']],
            line: 907,
        );
    }

    #[Depends('testAssertReturn297')]
    public function testAssertReturn298(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '㋐', 'args' => []],
            expected: [['type' => 'i32', 'value' => '293']],
            line: 908,
        );
    }

    #[Depends('testAssertReturn298')]
    public function testAssertReturn299(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ꀊ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '294']],
            line: 909,
        );
    }

    #[Depends('testAssertReturn299')]
    public function testAssertReturn300(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ꓮ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '295']],
            line: 910,
        );
    }

    #[Depends('testAssertReturn300')]
    public function testAssertReturn301(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ꕉ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '296']],
            line: 911,
        );
    }

    #[Depends('testAssertReturn301')]
    public function testAssertReturn302(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ꚠ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '297']],
            line: 912,
        );
    }

    #[Depends('testAssertReturn302')]
    public function testAssertReturn303(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ꠀ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '298']],
            line: 913,
        );
    }

    #[Depends('testAssertReturn303')]
    public function testAssertReturn304(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ꠣ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '299']],
            line: 914,
        );
    }

    #[Depends('testAssertReturn304')]
    public function testAssertReturn305(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ꡝ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '300']],
            line: 915,
        );
    }

    #[Depends('testAssertReturn305')]
    public function testAssertReturn306(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ꢂ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '301']],
            line: 916,
        );
    }

    #[Depends('testAssertReturn306')]
    public function testAssertReturn307(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '꣪', 'args' => []],
            expected: [['type' => 'i32', 'value' => '302']],
            line: 917,
        );
    }

    #[Depends('testAssertReturn307')]
    public function testAssertReturn308(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ꤢ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '303']],
            line: 918,
        );
    }

    #[Depends('testAssertReturn308')]
    public function testAssertReturn309(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ꥆ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '304']],
            line: 919,
        );
    }

    #[Depends('testAssertReturn309')]
    public function testAssertReturn310(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ꦄ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '305']],
            line: 920,
        );
    }

    #[Depends('testAssertReturn310')]
    public function testAssertReturn311(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ꨀ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '306']],
            line: 921,
        );
    }

    #[Depends('testAssertReturn311')]
    public function testAssertReturn312(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ｱ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '307']],
            line: 922,
        );
    }

    #[Depends('testAssertReturn312')]
    public function testAssertReturn313(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ￂ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '308']],
            line: 923,
        );
    }

    #[Depends('testAssertReturn313')]
    public function testAssertReturn314(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𐀀', 'args' => []],
            expected: [['type' => 'i32', 'value' => '309']],
            line: 924,
        );
    }

    #[Depends('testAssertReturn314')]
    public function testAssertReturn315(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𐊀', 'args' => []],
            expected: [['type' => 'i32', 'value' => '310']],
            line: 925,
        );
    }

    #[Depends('testAssertReturn315')]
    public function testAssertReturn316(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𐊠', 'args' => []],
            expected: [['type' => 'i32', 'value' => '311']],
            line: 926,
        );
    }

    #[Depends('testAssertReturn316')]
    public function testAssertReturn317(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𐌀', 'args' => []],
            expected: [['type' => 'i32', 'value' => '312']],
            line: 927,
        );
    }

    #[Depends('testAssertReturn317')]
    public function testAssertReturn318(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𐎠', 'args' => []],
            expected: [['type' => 'i32', 'value' => '313']],
            line: 928,
        );
    }

    #[Depends('testAssertReturn318')]
    public function testAssertReturn319(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𐒖', 'args' => []],
            expected: [['type' => 'i32', 'value' => '314']],
            line: 929,
        );
    }

    #[Depends('testAssertReturn319')]
    public function testAssertReturn320(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𐔀', 'args' => []],
            expected: [['type' => 'i32', 'value' => '315']],
            line: 930,
        );
    }

    #[Depends('testAssertReturn320')]
    public function testAssertReturn321(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𐝀', 'args' => []],
            expected: [['type' => 'i32', 'value' => '316']],
            line: 931,
        );
    }

    #[Depends('testAssertReturn321')]
    public function testAssertReturn322(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𐠀', 'args' => []],
            expected: [['type' => 'i32', 'value' => '317']],
            line: 932,
        );
    }

    #[Depends('testAssertReturn322')]
    public function testAssertReturn323(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𐤠', 'args' => []],
            expected: [['type' => 'i32', 'value' => '318']],
            line: 933,
        );
    }

    #[Depends('testAssertReturn323')]
    public function testAssertReturn324(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𐦀', 'args' => []],
            expected: [['type' => 'i32', 'value' => '319']],
            line: 934,
        );
    }

    #[Depends('testAssertReturn324')]
    public function testAssertReturn325(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𐦠', 'args' => []],
            expected: [['type' => 'i32', 'value' => '320']],
            line: 935,
        );
    }

    #[Depends('testAssertReturn325')]
    public function testAssertReturn326(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𐨀', 'args' => []],
            expected: [['type' => 'i32', 'value' => '321']],
            line: 936,
        );
    }

    #[Depends('testAssertReturn326')]
    public function testAssertReturn327(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𐬀', 'args' => []],
            expected: [['type' => 'i32', 'value' => '322']],
            line: 937,
        );
    }

    #[Depends('testAssertReturn327')]
    public function testAssertReturn328(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𐰀', 'args' => []],
            expected: [['type' => 'i32', 'value' => '323']],
            line: 938,
        );
    }

    #[Depends('testAssertReturn328')]
    public function testAssertReturn329(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𐰁', 'args' => []],
            expected: [['type' => 'i32', 'value' => '324']],
            line: 939,
        );
    }

    #[Depends('testAssertReturn329')]
    public function testAssertReturn330(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𐲀', 'args' => []],
            expected: [['type' => 'i32', 'value' => '325']],
            line: 940,
        );
    }

    #[Depends('testAssertReturn330')]
    public function testAssertReturn331(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𑀅', 'args' => []],
            expected: [['type' => 'i32', 'value' => '326']],
            line: 941,
        );
    }

    #[Depends('testAssertReturn331')]
    public function testAssertReturn332(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𑂃', 'args' => []],
            expected: [['type' => 'i32', 'value' => '327']],
            line: 942,
        );
    }

    #[Depends('testAssertReturn332')]
    public function testAssertReturn333(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𑄧', 'args' => []],
            expected: [['type' => 'i32', 'value' => '328']],
            line: 943,
        );
    }

    #[Depends('testAssertReturn333')]
    public function testAssertReturn334(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𑅐', 'args' => []],
            expected: [['type' => 'i32', 'value' => '329']],
            line: 944,
        );
    }

    #[Depends('testAssertReturn334')]
    public function testAssertReturn335(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𑆃', 'args' => []],
            expected: [['type' => 'i32', 'value' => '330']],
            line: 945,
        );
    }

    #[Depends('testAssertReturn335')]
    public function testAssertReturn336(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𑈀', 'args' => []],
            expected: [['type' => 'i32', 'value' => '331']],
            line: 946,
        );
    }

    #[Depends('testAssertReturn336')]
    public function testAssertReturn337(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𑊀', 'args' => []],
            expected: [['type' => 'i32', 'value' => '332']],
            line: 947,
        );
    }

    #[Depends('testAssertReturn337')]
    public function testAssertReturn338(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𑊰', 'args' => []],
            expected: [['type' => 'i32', 'value' => '333']],
            line: 948,
        );
    }

    #[Depends('testAssertReturn338')]
    public function testAssertReturn339(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𑌅', 'args' => []],
            expected: [['type' => 'i32', 'value' => '334']],
            line: 949,
        );
    }

    #[Depends('testAssertReturn339')]
    public function testAssertReturn340(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𑍰', 'args' => []],
            expected: [['type' => 'i32', 'value' => '335']],
            line: 950,
        );
    }

    #[Depends('testAssertReturn340')]
    public function testAssertReturn341(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𑐀', 'args' => []],
            expected: [['type' => 'i32', 'value' => '336']],
            line: 951,
        );
    }

    #[Depends('testAssertReturn341')]
    public function testAssertReturn342(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𑒁', 'args' => []],
            expected: [['type' => 'i32', 'value' => '337']],
            line: 952,
        );
    }

    #[Depends('testAssertReturn342')]
    public function testAssertReturn343(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𑖀', 'args' => []],
            expected: [['type' => 'i32', 'value' => '338']],
            line: 953,
        );
    }

    #[Depends('testAssertReturn343')]
    public function testAssertReturn344(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𑘀', 'args' => []],
            expected: [['type' => 'i32', 'value' => '339']],
            line: 954,
        );
    }

    #[Depends('testAssertReturn344')]
    public function testAssertReturn345(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𑚀', 'args' => []],
            expected: [['type' => 'i32', 'value' => '340']],
            line: 955,
        );
    }

    #[Depends('testAssertReturn345')]
    public function testAssertReturn346(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𑜒', 'args' => []],
            expected: [['type' => 'i32', 'value' => '341']],
            line: 956,
        );
    }

    #[Depends('testAssertReturn346')]
    public function testAssertReturn347(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𑜠', 'args' => []],
            expected: [['type' => 'i32', 'value' => '342']],
            line: 957,
        );
    }

    #[Depends('testAssertReturn347')]
    public function testAssertReturn348(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𑢡', 'args' => []],
            expected: [['type' => 'i32', 'value' => '343']],
            line: 958,
        );
    }

    #[Depends('testAssertReturn348')]
    public function testAssertReturn349(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𑫕', 'args' => []],
            expected: [['type' => 'i32', 'value' => '344']],
            line: 959,
        );
    }

    #[Depends('testAssertReturn349')]
    public function testAssertReturn350(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𑰀', 'args' => []],
            expected: [['type' => 'i32', 'value' => '345']],
            line: 960,
        );
    }

    #[Depends('testAssertReturn350')]
    public function testAssertReturn351(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𑲏', 'args' => []],
            expected: [['type' => 'i32', 'value' => '346']],
            line: 961,
        );
    }

    #[Depends('testAssertReturn351')]
    public function testAssertReturn352(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𑲯', 'args' => []],
            expected: [['type' => 'i32', 'value' => '347']],
            line: 962,
        );
    }

    #[Depends('testAssertReturn352')]
    public function testAssertReturn353(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𒀀', 'args' => []],
            expected: [['type' => 'i32', 'value' => '348']],
            line: 963,
        );
    }

    #[Depends('testAssertReturn353')]
    public function testAssertReturn354(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𖧕', 'args' => []],
            expected: [['type' => 'i32', 'value' => '349']],
            line: 964,
        );
    }

    #[Depends('testAssertReturn354')]
    public function testAssertReturn355(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𖩆', 'args' => []],
            expected: [['type' => 'i32', 'value' => '350']],
            line: 965,
        );
    }

    #[Depends('testAssertReturn355')]
    public function testAssertReturn356(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𖫧', 'args' => []],
            expected: [['type' => 'i32', 'value' => '351']],
            line: 966,
        );
    }

    #[Depends('testAssertReturn356')]
    public function testAssertReturn357(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𖽔', 'args' => []],
            expected: [['type' => 'i32', 'value' => '352']],
            line: 967,
        );
    }

    #[Depends('testAssertReturn357')]
    public function testAssertReturn358(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𛱁', 'args' => []],
            expected: [['type' => 'i32', 'value' => '353']],
            line: 968,
        );
    }

    #[Depends('testAssertReturn358')]
    public function testAssertReturn359(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𛱤', 'args' => []],
            expected: [['type' => 'i32', 'value' => '354']],
            line: 969,
        );
    }

    #[Depends('testAssertReturn359')]
    public function testAssertReturn360(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𞠣', 'args' => []],
            expected: [['type' => 'i32', 'value' => '355']],
            line: 970,
        );
    }

    #[Depends('testAssertReturn360')]
    public function testAssertReturn361(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '🇦', 'args' => []],
            expected: [['type' => 'i32', 'value' => '356']],
            line: 971,
        );
    }

    #[Depends('testAssertReturn361')]
    public function testAssertReturn362(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ɑ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '357']],
            line: 972,
        );
    }

    #[Depends('testAssertReturn362')]
    public function testAssertReturn363(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Λ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '358']],
            line: 973,
        );
    }

    #[Depends('testAssertReturn363')]
    public function testAssertReturn364(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ɒ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '359']],
            line: 974,
        );
    }

    #[Depends('testAssertReturn364')]
    public function testAssertReturn365(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ª', 'args' => []],
            expected: [['type' => 'i32', 'value' => '360']],
            line: 975,
        );
    }

    #[Depends('testAssertReturn365')]
    public function testAssertReturn366(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '∀', 'args' => []],
            expected: [['type' => 'i32', 'value' => '361']],
            line: 976,
        );
    }

    #[Depends('testAssertReturn366')]
    public function testAssertReturn367(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '₳', 'args' => []],
            expected: [['type' => 'i32', 'value' => '362']],
            line: 977,
        );
    }

    #[Depends('testAssertReturn367')]
    public function testAssertReturn368(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𐤀', 'args' => []],
            expected: [['type' => 'i32', 'value' => '363']],
            line: 978,
        );
    }

    #[Depends('testAssertReturn368')]
    public function testAssertReturn369(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ⲁ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '364']],
            line: 979,
        );
    }

    #[Depends('testAssertReturn369')]
    public function testAssertReturn370(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𐌰', 'args' => []],
            expected: [['type' => 'i32', 'value' => '365']],
            line: 980,
        );
    }

    #[Depends('testAssertReturn370')]
    public function testAssertReturn371(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ά', 'args' => []],
            expected: [['type' => 'i32', 'value' => '366']],
            line: 981,
        );
    }

    #[Depends('testAssertReturn371')]
    public function testAssertReturn372(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Α', 'args' => []],
            expected: [['type' => 'i32', 'value' => '367']],
            line: 982,
        );
    }

    #[Depends('testAssertReturn372')]
    public function testAssertReturn373(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ἀ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '368']],
            line: 983,
        );
    }

    #[Depends('testAssertReturn373')]
    public function testAssertReturn374(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ἁ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '369']],
            line: 984,
        );
    }

    #[Depends('testAssertReturn374')]
    public function testAssertReturn375(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ἂ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '370']],
            line: 985,
        );
    }

    #[Depends('testAssertReturn375')]
    public function testAssertReturn376(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ἃ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '371']],
            line: 986,
        );
    }

    #[Depends('testAssertReturn376')]
    public function testAssertReturn377(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ἄ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '372']],
            line: 987,
        );
    }

    #[Depends('testAssertReturn377')]
    public function testAssertReturn378(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ἅ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '373']],
            line: 988,
        );
    }

    #[Depends('testAssertReturn378')]
    public function testAssertReturn379(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ἆ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '374']],
            line: 989,
        );
    }

    #[Depends('testAssertReturn379')]
    public function testAssertReturn380(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ἇ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '375']],
            line: 990,
        );
    }

    #[Depends('testAssertReturn380')]
    public function testAssertReturn381(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ᾈ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '376']],
            line: 991,
        );
    }

    #[Depends('testAssertReturn381')]
    public function testAssertReturn382(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ᾉ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '377']],
            line: 992,
        );
    }

    #[Depends('testAssertReturn382')]
    public function testAssertReturn383(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ᾊ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '378']],
            line: 993,
        );
    }

    #[Depends('testAssertReturn383')]
    public function testAssertReturn384(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ᾋ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '379']],
            line: 994,
        );
    }

    #[Depends('testAssertReturn384')]
    public function testAssertReturn385(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ᾌ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '380']],
            line: 995,
        );
    }

    #[Depends('testAssertReturn385')]
    public function testAssertReturn386(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ᾍ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '381']],
            line: 996,
        );
    }

    #[Depends('testAssertReturn386')]
    public function testAssertReturn387(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ᾎ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '382']],
            line: 997,
        );
    }

    #[Depends('testAssertReturn387')]
    public function testAssertReturn388(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ᾏ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '383']],
            line: 998,
        );
    }

    #[Depends('testAssertReturn388')]
    public function testAssertReturn389(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ᾰ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '384']],
            line: 999,
        );
    }

    #[Depends('testAssertReturn389')]
    public function testAssertReturn390(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ᾱ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '385']],
            line: 1000,
        );
    }

    #[Depends('testAssertReturn390')]
    public function testAssertReturn391(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ὰ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '386']],
            line: 1001,
        );
    }

    #[Depends('testAssertReturn391')]
    public function testAssertReturn392(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ά', 'args' => []],
            expected: [['type' => 'i32', 'value' => '387']],
            line: 1002,
        );
    }

    #[Depends('testAssertReturn392')]
    public function testAssertReturn393(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ᾼ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '388']],
            line: 1003,
        );
    }

    #[Depends('testAssertReturn393')]
    public function testAssertReturn394(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𝚨', 'args' => []],
            expected: [['type' => 'i32', 'value' => '389']],
            line: 1004,
        );
    }

    #[Depends('testAssertReturn394')]
    public function testAssertReturn395(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𝛢', 'args' => []],
            expected: [['type' => 'i32', 'value' => '390']],
            line: 1005,
        );
    }

    #[Depends('testAssertReturn395')]
    public function testAssertReturn396(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𝜜', 'args' => []],
            expected: [['type' => 'i32', 'value' => '391']],
            line: 1006,
        );
    }

    #[Depends('testAssertReturn396')]
    public function testAssertReturn397(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𝝖', 'args' => []],
            expected: [['type' => 'i32', 'value' => '392']],
            line: 1007,
        );
    }

    #[Depends('testAssertReturn397')]
    public function testAssertReturn398(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𝞐', 'args' => []],
            expected: [['type' => 'i32', 'value' => '393']],
            line: 1008,
        );
    }

    #[Depends('testAssertReturn398')]
    public function testAssertReturn399(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '⍶', 'args' => []],
            expected: [['type' => 'i32', 'value' => '394']],
            line: 1009,
        );
    }

    #[Depends('testAssertReturn399')]
    public function testAssertReturn400(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '⍺', 'args' => []],
            expected: [['type' => 'i32', 'value' => '395']],
            line: 1010,
        );
    }

    #[Depends('testAssertReturn400')]
    public function testAssertReturn401(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '⩜', 'args' => []],
            expected: [['type' => 'i32', 'value' => '396']],
            line: 1011,
        );
    }

    #[Depends('testAssertReturn401')]
    public function testAssertReturn402(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ᗅ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '397']],
            line: 1012,
        );
    }

    #[Depends('testAssertReturn402')]
    public function testAssertReturn403(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'Ꭺ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '398']],
            line: 1013,
        );
    }

    #[Depends('testAssertReturn403')]
    public function testAssertReturn404(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => ')˺˼𔗏𝅴𝅶𝅸𝅺⁾₎❩❫⟯﴿︶﹚）｠󠀩❳❵⟧⟩⟫⟭⦈⦊⦖⸣⸥︘︸︺︼︾﹀﹂﹄﹈﹜﹞］｝｣󠁝󠁽»’”›❯', 'args' => []],
            expected: [['type' => 'i32', 'value' => '399']],
            line: 1014,
        );
    }

    #[Depends('testAssertReturn404')]
    public function testAssertReturn405(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '(˹˻𔗎𝅳𝅵𝅷𝅹⁽₍❨❪⟮﴾︵﹙（｟󠀨❲❴⟦⟨⟪⟬⦇⦉⦕⸢⸤︗︷︹︻︽︿﹁﹃﹇﹛﹝［｛｢󠁛󠁻«‘“‹❮', 'args' => []],
            expected: [['type' => 'i32', 'value' => '400']],
            line: 1015,
        );
    }

    #[Depends('testAssertReturn405')]
    public function testAssertReturn406(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𝪋𝪤', 'args' => []],
            expected: [['type' => 'i32', 'value' => '401']],
            line: 1016,
        );
    }

    #[Depends('testAssertReturn406')]
    public function testAssertReturn407(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𝪋', 'args' => []],
            expected: [['type' => 'i32', 'value' => '402']],
            line: 1017,
        );
    }

    #[Depends('testAssertReturn407')]
    public function testAssertReturn408(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '½', 'args' => []],
            expected: [['type' => 'i32', 'value' => '403']],
            line: 1018,
        );
    }

    #[Depends('testAssertReturn408')]
    public function testAssertReturn409(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '1⁄2', 'args' => []],
            expected: [['type' => 'i32', 'value' => '404']],
            line: 1019,
        );
    }

    #[Depends('testAssertReturn409')]
    public function testAssertReturn410(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '1/2', 'args' => []],
            expected: [['type' => 'i32', 'value' => '405']],
            line: 1020,
        );
    }

    #[Depends('testAssertReturn410')]
    public function testAssertReturn411(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '୳', 'args' => []],
            expected: [['type' => 'i32', 'value' => '406']],
            line: 1021,
        );
    }

    #[Depends('testAssertReturn411')]
    public function testAssertReturn412(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '൴', 'args' => []],
            expected: [['type' => 'i32', 'value' => '407']],
            line: 1022,
        );
    }

    #[Depends('testAssertReturn412')]
    public function testAssertReturn413(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '⳽', 'args' => []],
            expected: [['type' => 'i32', 'value' => '408']],
            line: 1023,
        );
    }

    #[Depends('testAssertReturn413')]
    public function testAssertReturn414(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '꠱', 'args' => []],
            expected: [['type' => 'i32', 'value' => '409']],
            line: 1024,
        );
    }

    #[Depends('testAssertReturn414')]
    public function testAssertReturn415(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𐅁', 'args' => []],
            expected: [['type' => 'i32', 'value' => '410']],
            line: 1025,
        );
    }

    #[Depends('testAssertReturn415')]
    public function testAssertReturn416(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𐅵', 'args' => []],
            expected: [['type' => 'i32', 'value' => '411']],
            line: 1026,
        );
    }

    #[Depends('testAssertReturn416')]
    public function testAssertReturn417(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𐅶', 'args' => []],
            expected: [['type' => 'i32', 'value' => '412']],
            line: 1027,
        );
    }

    #[Depends('testAssertReturn417')]
    public function testAssertReturn418(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𐦽', 'args' => []],
            expected: [['type' => 'i32', 'value' => '413']],
            line: 1028,
        );
    }

    #[Depends('testAssertReturn418')]
    public function testAssertReturn419(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𐹻', 'args' => []],
            expected: [['type' => 'i32', 'value' => '414']],
            line: 1029,
        );
    }

    #[Depends('testAssertReturn419')]
    public function testAssertReturn420(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '＂', 'args' => []],
            expected: [['type' => 'i32', 'value' => '415']],
            line: 1030,
        );
    }

    #[Depends('testAssertReturn420')]
    public function testAssertReturn421(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '', 'args' => []],
            expected: [['type' => 'i32', 'value' => '416']],
            line: 1031,
        );
    }

    #[Depends('testAssertReturn421')]
    public function testAssertReturn422(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '', 'args' => []],
            expected: [['type' => 'i32', 'value' => '417']],
            line: 1032,
        );
    }

    #[Depends('testAssertReturn422')]
    public function testAssertReturn423(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '⌫', 'args' => []],
            expected: [['type' => 'i32', 'value' => '418']],
            line: 1033,
        );
    }

    #[Depends('testAssertReturn423')]
    public function testAssertReturn424(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '⌦', 'args' => []],
            expected: [['type' => 'i32', 'value' => '419']],
            line: 1034,
        );
    }

    #[Depends('testAssertReturn424')]
    public function testAssertReturn425(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '␈', 'args' => []],
            expected: [['type' => 'i32', 'value' => '420']],
            line: 1035,
        );
    }

    #[Depends('testAssertReturn425')]
    public function testAssertReturn426(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '␡', 'args' => []],
            expected: [['type' => 'i32', 'value' => '421']],
            line: 1036,
        );
    }

    #[Depends('testAssertReturn426')]
    public function testAssertReturn427(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '᷻', 'args' => []],
            expected: [['type' => 'i32', 'value' => '422']],
            line: 1037,
        );
    }

    #[Depends('testAssertReturn427')]
    public function testAssertReturn428(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '', 'args' => []],
            expected: [['type' => 'i32', 'value' => '423']],
            line: 1038,
        );
    }

    #[Depends('testAssertReturn428')]
    public function testAssertReturn429(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '←', 'args' => []],
            expected: [['type' => 'i32', 'value' => '424']],
            line: 1039,
        );
    }

    #[Depends('testAssertReturn429')]
    public function testAssertReturn430(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '⌧', 'args' => []],
            expected: [['type' => 'i32', 'value' => '425']],
            line: 1040,
        );
    }

    #[Depends('testAssertReturn430')]
    public function testAssertReturn431(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '⍒', 'args' => []],
            expected: [['type' => 'i32', 'value' => '426']],
            line: 1041,
        );
    }

    #[Depends('testAssertReturn431')]
    public function testAssertReturn432(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '⍔', 'args' => []],
            expected: [['type' => 'i32', 'value' => '427']],
            line: 1042,
        );
    }

    #[Depends('testAssertReturn432')]
    public function testAssertReturn433(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '⍢', 'args' => []],
            expected: [['type' => 'i32', 'value' => '428']],
            line: 1043,
        );
    }

    #[Depends('testAssertReturn433')]
    public function testAssertReturn434(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '⍫', 'args' => []],
            expected: [['type' => 'i32', 'value' => '429']],
            line: 1044,
        );
    }

    #[Depends('testAssertReturn434')]
    public function testAssertReturn435(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '', 'args' => []],
            expected: [['type' => 'i32', 'value' => '430']],
            line: 1045,
        );
    }

    #[Depends('testAssertReturn435')]
    public function testAssertReturn436(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '␦', 'args' => []],
            expected: [['type' => 'i32', 'value' => '431']],
            line: 1046,
        );
    }

    #[Depends('testAssertReturn436')]
    public function testAssertReturn437(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '␚', 'args' => []],
            expected: [['type' => 'i32', 'value' => '432']],
            line: 1047,
        );
    }

    #[Depends('testAssertReturn437')]
    public function testAssertReturn438(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '￼', 'args' => []],
            expected: [['type' => 'i32', 'value' => '433']],
            line: 1048,
        );
    }

    #[Depends('testAssertReturn438')]
    public function testAssertReturn439(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '?', 'args' => []],
            expected: [['type' => 'i32', 'value' => '434']],
            line: 1049,
        );
    }

    #[Depends('testAssertReturn439')]
    public function testAssertReturn440(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '¿', 'args' => []],
            expected: [['type' => 'i32', 'value' => '435']],
            line: 1050,
        );
    }

    #[Depends('testAssertReturn440')]
    public function testAssertReturn441(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '᥅', 'args' => []],
            expected: [['type' => 'i32', 'value' => '436']],
            line: 1051,
        );
    }

    #[Depends('testAssertReturn441')]
    public function testAssertReturn442(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => ';', 'args' => []],
            expected: [['type' => 'i32', 'value' => '437']],
            line: 1052,
        );
    }

    #[Depends('testAssertReturn442')]
    public function testAssertReturn443(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '՞', 'args' => []],
            expected: [['type' => 'i32', 'value' => '438']],
            line: 1053,
        );
    }

    #[Depends('testAssertReturn443')]
    public function testAssertReturn444(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '؟', 'args' => []],
            expected: [['type' => 'i32', 'value' => '439']],
            line: 1054,
        );
    }

    #[Depends('testAssertReturn444')]
    public function testAssertReturn445(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '፧', 'args' => []],
            expected: [['type' => 'i32', 'value' => '440']],
            line: 1055,
        );
    }

    #[Depends('testAssertReturn445')]
    public function testAssertReturn446(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '⁇', 'args' => []],
            expected: [['type' => 'i32', 'value' => '441']],
            line: 1056,
        );
    }

    #[Depends('testAssertReturn446')]
    public function testAssertReturn447(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '⍰', 'args' => []],
            expected: [['type' => 'i32', 'value' => '442']],
            line: 1057,
        );
    }

    #[Depends('testAssertReturn447')]
    public function testAssertReturn448(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '❓', 'args' => []],
            expected: [['type' => 'i32', 'value' => '443']],
            line: 1058,
        );
    }

    #[Depends('testAssertReturn448')]
    public function testAssertReturn449(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '❔', 'args' => []],
            expected: [['type' => 'i32', 'value' => '444']],
            line: 1059,
        );
    }

    #[Depends('testAssertReturn449')]
    public function testAssertReturn450(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '⳺', 'args' => []],
            expected: [['type' => 'i32', 'value' => '445']],
            line: 1060,
        );
    }

    #[Depends('testAssertReturn450')]
    public function testAssertReturn451(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '⳻', 'args' => []],
            expected: [['type' => 'i32', 'value' => '446']],
            line: 1061,
        );
    }

    #[Depends('testAssertReturn451')]
    public function testAssertReturn452(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '⸮', 'args' => []],
            expected: [['type' => 'i32', 'value' => '447']],
            line: 1062,
        );
    }

    #[Depends('testAssertReturn452')]
    public function testAssertReturn453(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '㉄', 'args' => []],
            expected: [['type' => 'i32', 'value' => '448']],
            line: 1063,
        );
    }

    #[Depends('testAssertReturn453')]
    public function testAssertReturn454(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '꘏', 'args' => []],
            expected: [['type' => 'i32', 'value' => '449']],
            line: 1064,
        );
    }

    #[Depends('testAssertReturn454')]
    public function testAssertReturn455(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '꛷', 'args' => []],
            expected: [['type' => 'i32', 'value' => '450']],
            line: 1065,
        );
    }

    #[Depends('testAssertReturn455')]
    public function testAssertReturn456(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '︖', 'args' => []],
            expected: [['type' => 'i32', 'value' => '451']],
            line: 1066,
        );
    }

    #[Depends('testAssertReturn456')]
    public function testAssertReturn457(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '﹖', 'args' => []],
            expected: [['type' => 'i32', 'value' => '452']],
            line: 1067,
        );
    }

    #[Depends('testAssertReturn457')]
    public function testAssertReturn458(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '？', 'args' => []],
            expected: [['type' => 'i32', 'value' => '453']],
            line: 1068,
        );
    }

    #[Depends('testAssertReturn458')]
    public function testAssertReturn459(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𑅃', 'args' => []],
            expected: [['type' => 'i32', 'value' => '454']],
            line: 1069,
        );
    }

    #[Depends('testAssertReturn459')]
    public function testAssertReturn460(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𞥟', 'args' => []],
            expected: [['type' => 'i32', 'value' => '455']],
            line: 1070,
        );
    }

    #[Depends('testAssertReturn460')]
    public function testAssertReturn461(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '󠀿', 'args' => []],
            expected: [['type' => 'i32', 'value' => '456']],
            line: 1071,
        );
    }

    #[Depends('testAssertReturn461')]
    public function testAssertReturn462(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '𖡄', 'args' => []],
            expected: [['type' => 'i32', 'value' => '457']],
            line: 1072,
        );
    }

    #[Depends('testAssertReturn462')]
    public function testAssertReturn463(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '⯑', 'args' => []],
            expected: [['type' => 'i32', 'value' => '458']],
            line: 1073,
        );
    }

    #[Depends('testAssertReturn463')]
    public function testAssertReturn464(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '¶', 'args' => []],
            expected: [['type' => 'i32', 'value' => '459']],
            line: 1074,
        );
    }

    #[Depends('testAssertReturn464')]
    public function testAssertReturn465(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '⁋', 'args' => []],
            expected: [['type' => 'i32', 'value' => '460']],
            line: 1075,
        );
    }

    #[Depends('testAssertReturn465')]
    public function testAssertReturn466(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '܀', 'args' => []],
            expected: [['type' => 'i32', 'value' => '461']],
            line: 1076,
        );
    }

    #[Depends('testAssertReturn466')]
    public function testAssertReturn467(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '჻', 'args' => []],
            expected: [['type' => 'i32', 'value' => '462']],
            line: 1077,
        );
    }

    #[Depends('testAssertReturn467')]
    public function testAssertReturn468(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '፨', 'args' => []],
            expected: [['type' => 'i32', 'value' => '463']],
            line: 1078,
        );
    }

    #[Depends('testAssertReturn468')]
    public function testAssertReturn469(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '〷', 'args' => []],
            expected: [['type' => 'i32', 'value' => '464']],
            line: 1079,
        );
    }

    #[Depends('testAssertReturn469')]
    public function testAssertReturn470(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '❡', 'args' => []],
            expected: [['type' => 'i32', 'value' => '465']],
            line: 1080,
        );
    }

    #[Depends('testAssertReturn470')]
    public function testAssertReturn471(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '⸏', 'args' => []],
            expected: [['type' => 'i32', 'value' => '466']],
            line: 1081,
        );
    }

    #[Depends('testAssertReturn471')]
    public function testAssertReturn472(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '⸐', 'args' => []],
            expected: [['type' => 'i32', 'value' => '467']],
            line: 1082,
        );
    }

    #[Depends('testAssertReturn472')]
    public function testAssertReturn473(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '⸑', 'args' => []],
            expected: [['type' => 'i32', 'value' => '468']],
            line: 1083,
        );
    }

    #[Depends('testAssertReturn473')]
    public function testAssertReturn474(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '⸎', 'args' => []],
            expected: [['type' => 'i32', 'value' => '469']],
            line: 1084,
        );
    }

    #[Depends('testAssertReturn474')]
    public function testAssertReturn475(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '', 'args' => []],
            expected: [['type' => 'i32', 'value' => '470']],
            line: 1085,
        );
    }

    #[Depends('testAssertReturn475')]
    public function testAssertReturn476(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '☙', 'args' => []],
            expected: [['type' => 'i32', 'value' => '471']],
            line: 1086,
        );
    }

    #[Depends('testAssertReturn476')]
    public function testAssertReturn477(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '⸿', 'args' => []],
            expected: [['type' => 'i32', 'value' => '472']],
            line: 1087,
        );
    }

    #[Depends('testAssertReturn477')]
    public function testAssertReturn478(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '〇', 'args' => []],
            expected: [['type' => 'i32', 'value' => '473']],
            line: 1088,
        );
    }

    #[Depends('testAssertReturn478')]
    public function testAssertReturn479(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => '๛', 'args' => []],
            expected: [['type' => 'i32', 'value' => '474']],
            line: 1089,
        );
    }

    #[Depends('testAssertReturn479')]
    public function testAssertReturn480(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ꙮ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '475']],
            line: 1090,
        );
    }

    #[Depends('testAssertReturn480')]
    public function testAssertReturn481(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ϓ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '476']],
            line: 1091,
        );
    }

    #[Depends('testAssertReturn481')]
    public function testAssertReturn482(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ϔ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '477']],
            line: 1092,
        );
    }

    #[Depends('testAssertReturn482')]
    public function testAssertReturn483(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'ẛ', 'args' => []],
            expected: [['type' => 'i32', 'value' => '478']],
            line: 1093,
        );
    }

    #[Depends('testAssertReturn483')]
    public function testModule484(): void
    {
        $this->runModuleCommand(
            filename: 'names.3.wasm',
            name: null,
            line: 1095,
        );
    }

    #[Depends('testModule484')]
    public function testAssertReturn485(): void
    {
        $this->runAssertReturnCommand(
            action: ['type' => 'invoke', 'field' => 'print32', 'args' => [['type' => 'i32', 'value' => '42'], ['type' => 'i32', 'value' => '123']]],
            expected: [],
            line: 1107,
        );
    }
}
