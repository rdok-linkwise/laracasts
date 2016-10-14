<?php

namespace tests\unit\App\RomanNumerals;

use App\RomanNumerals\RomanNumerals;
use PhpSpec\ObjectBehavior;

class RomanNumeralsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(RomanNumerals::class);
    }

    function it_translates_one_to_roman_numeral()
    {
        $this->translate(1)->shouldReturn('I');
    }

    function it_translates_two_to_roman_numeral()
    {
        $this->translate(2)->shouldReturn('II');
    }

    function it_translates_three_to_roman_numeral()
    {
        $this->translate(3)->shouldReturn('III');
    }

    function it_translates_four_to_roman_numeral()
    {
        $this->translate(4)->shouldReturn('IV');
    }

    function it_translates_five_to_roman_numeral()
    {
        $this->translate(5)->shouldReturn('V');
    }

    function it_translates_six_to_roman_numeral()
    {
        $this->translate(6)->shouldReturn('VI');
    }

    function it_translates_seven_to_roman_numeral()
    {
        $this->translate(7)->shouldReturn('VII');
    }

    function it_translates_eight_to_roman_numeral()
    {
        $this->translate(8)->shouldReturn('VIII');
    }

    function it_translates_nine_to_roman_numeral()
    {
        $this->translate(9)->shouldReturn('IX');
    }

    function it_translates_ten_to_roman_numeral()
    {
        $this->translate(10)->shouldReturn('X');
    }

    function it_translates_eleven_to_roman_numeral()
    {
        $this->translate(11)->shouldReturn('XI');
    }

    function it_translates_twelve_to_roman_numeral()
    {
        $this->translate(12)->shouldReturn('XII');
    }

    function it_translates_thirteen_to_roman_numeral()
    {
        $this->translate(13)->shouldReturn('XIII');
    }

    function it_translates_fourteen_to_roman_numeral()
    {
        $this->translate(14)->shouldReturn('XIV');
    }

    function it_translates_twenty_five_to_roman_numeral()
    {
        $this->translate(25)->shouldReturn('XXV');
    }

    function it_translates_thirty_six_to_roman_numeral()
    {
        $this->translate(36)->shouldReturn('XXXVI');
    }

    function it_translates_forty_seven_to_roman_numeral()
    {
        $this->translate(47)->shouldReturn('XLVII');
    }
}
