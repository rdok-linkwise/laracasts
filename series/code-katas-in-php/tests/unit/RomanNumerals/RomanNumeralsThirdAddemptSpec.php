<?php

namespace tests\unit\App\RomanNumerals;

use App\RomanNumerals\RomanNumeralsThirdAddempt;
use PhpSpec\ObjectBehavior;

class RomanNumeralsThirdAddemptSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(RomanNumeralsThirdAddempt::class);
    }

    function it_converts_1_to_roman_equivalent()
    {
        $this->convert(1)->shouldReturn('I');
    }

//    function it_converts_2_to_roman_equivalent()
//    {
//        $this->convert(2)->shouldReturn('II');
//    }
}
