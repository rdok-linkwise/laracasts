<?php

namespace tests\unit\App\RomanNumerals;

use App\RomanNumerals\ThirdAttemptRomanNumerals;
use PhpSpec\ObjectBehavior;

class ThirdAttemptRomanNumeralsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(ThirdAttemptRomanNumerals::class);
    }

    function it_converts_1_to_roman_numeral()
    {
        $this->convert(1)->shouldReturn('I');
    }

    function it_converts_2_to_roman_numeral()
    {
        $this->convert(2)->shouldReturn('II');
    }

    function it_converts_3_to_roman_numeral()
    {
        $this->convert(3)->shouldReturn('III');
    }

    function it_converts_4_to_roman_numeral(){
        $this->convert(4)->shouldReturn('IV');
    }

    function it_converts_5_to_roman_numeral()
    {
        $this->convert(5)->shouldReturn('V');
    }

    function it_converts_6_to_roman_numeral()
    {
        $this->convert(6)->shouldReturn('VI');
    }

    function it_converts_7_to_roman_numeral()
    {
        $this->convert(7)->shouldReturn('VII');
    }

    function it_converts_9_to_roman_numeral()
    {
        $this->convert(9)->shouldReturn('IX');
    }
}
