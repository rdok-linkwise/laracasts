<?php

namespace tests\unit\App\RomanNumerals;

use App\RomanNumerals\SecondAttemptAtRomanNumeralConverter;
use PhpSpec\ObjectBehavior;

class SecondAttemptAtRomanNumeralConverterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(SecondAttemptAtRomanNumeralConverter::class);
    }

    function it_calculates_the_roman_numeral_for_1()
    {
        $this->convert(1)->shouldReturn('I');
    }

    function it_calculates_the_roman_numeral_for_2()
    {
        $this->convert(2)->shouldReturn('II');
    }

    function it_calculates_the_roman_numeral_for_3()
    {
        $this->convert(3)->shouldReturn('III');
    }

//    function it_calculates_the_roman_numeral_for_4()
//    {
//        $this->convert(4)->shouldReturn('IV');
//    }

    function it_calculates_the_roman_numeral_for_5()
    {
        $this->convert(5)->shouldReturn('V');
    }

    function it_calculates_the_roman_numeral_for_6()
    {
        $this->convert(6)->shouldReturn('VI');
    }
//    function it_calculates_the_roman_numeral_for_9()
//    {
//        $this->convert(9)->shouldReturn('IX');
//    }

    function it_calculates_the_roman_numeral_for_10()
    {
        $this->convert(10)->shouldReturn('X');
    }

    function it_calculates_the_roman_numeral_for_11()
    {
        $this->convert(11)->shouldReturn('XI');
    }

    function it_calculates_the_roman_numeral_for_20()
    {
        $this->convert(20)->shouldReturn('XX');
    }

    function it_calculates_the_roman_numeral_for_40()
    {
        $this->convert(40)->shouldReturn('XL');
    }
}
