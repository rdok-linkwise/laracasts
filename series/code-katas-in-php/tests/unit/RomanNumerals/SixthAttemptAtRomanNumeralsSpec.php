<?php

namespace tests\unit\App\RomanNumerals;

use App\RomanNumerals\SixthAttemptAtRomanNumerals;
use PhpSpec\ObjectBehavior;

class SixthAttemptAtRomanNumeralsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(SixthAttemptAtRomanNumerals::class);
    }

    function it_generates_roman_numeral_equilavent_of_one()
    {
        $this->generate(1)->shouldReturn('I');
    }

    function it_generates_roman_numeral_equilavent_of_two()
    {
        $this->generate(2)->shouldReturn('II');
    }

    function it_generates_roman_numeral_equilavent_of_three()
    {
        $this->generate(3)->shouldReturn('III');
    }

    function it_generates_roman_numeral_equilavent_of_four()
    {
        $this->generate(4)->shouldReturn('IV');
    }

    function it_generates_roman_numeral_equilavent_of_five()
    {
        $this->generate(5)->shouldReturn('V');
    }

    function it_generates_roman_numeral_equilavent_of_six()
    {
        $this->generate(6)->shouldReturn('VI');
    }

    function it_generates_roman_numeral_equilavent_of_seven()
    {
        $this->generate(7)->shouldReturn('VII');
    }

    function it_generates_roman_numeral_equilavent_of_eight()
    {
        $this->generate(8)->shouldReturn('VIII');
    }

    function it_generates_roman_numeral_equilavent_of_nine()
    {
        $this->generate(9)->shouldReturn('IX');
    }

    function it_generates_roman_numeral_equilavent_of_ten()
    {
        $this->generate(10)->shouldReturn('X');
    }

    function it_generates_roman_numeral_equilavent_of_eleven()
    {
        $this->generate(11)->shouldReturn('XI');
    }

    function it_generates_roman_numeral_equilavent_of_twelve()
    {
        $this->generate(12)->shouldReturn('XII');
    }

    function it_generates_roman_numeral_equilavent_of_thirteen()
    {
        $this->generate(13)->shouldReturn('XIII');
    }

    function it_generates_roman_numeral_equilavent_of_fourteen()
    {
        $this->generate(14)->shouldReturn('XIV');
    }

    function it_generates_roman_numeral_equilavent_of_fifteen()
    {
        $this->generate(15)->shouldReturn('XV');
    }

    function it_generates_roman_numeral_equilavent_of_sixteen()
    {
        $this->generate(16)->shouldReturn('XVI');
    }

    function it_generates_roman_numeral_equilavent_of_seventeen()
    {
        $this->generate(17)->shouldReturn('XVII');
    }
}
