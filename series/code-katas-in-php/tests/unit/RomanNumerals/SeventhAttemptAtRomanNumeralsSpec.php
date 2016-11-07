<?php

namespace tests\unit\App\RomanNumerals;

use App\RomanNumerals\SeventhAttemptAtRomanNumerals;
use PhpSpec\ObjectBehavior;

class SeventhAttemptAtRomanNumeralsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(SeventhAttemptAtRomanNumerals::class);
    }

    function it_generates_the_roman_equilavent_of_1()
    {
        $this->generate(1)->shouldReturn('I');
    }

    function it_generates_the_roman_equilavent_of_2()
    {
        $this->generate(2)->shouldReturn('II');
    }

    function it_generates_the_roman_equilavent_of_3()
    {
        $this->generate(3)->shouldReturn('III');
    }

    function it_generates_the_roman_equilavent_of_4()
    {
        $this->generate(4)->shouldReturn('IV');
    }

    function it_generates_the_roman_equilavent_of_5()
    {
        $this->generate(5)->shouldReturn('V');
    }

    function it_generates_the_roman_equilavent_of_6()
    {
        $this->generate(6)->shouldReturn('VI');
    }

    function it_generates_the_roman_equilavent_of_7()
    {
        $this->generate(7)->shouldReturn('VII');
    }

    function it_generates_the_roman_equilavent_of_8()
    {
        $this->generate(8)->shouldReturn('VIII');
    }

    function it_generates_the_roman_equilavent_of_9()
    {
        $this->generate(9)->shouldReturn('IX');
    }

    function it_generates_the_roman_equilavent_of_10()
    {
        $this->generate(10)->shouldReturn('X');
    }

    function it_generates_the_roman_equilavent_of_11()
    {
        $this->generate(11)->shouldReturn('XI');
    }
}
