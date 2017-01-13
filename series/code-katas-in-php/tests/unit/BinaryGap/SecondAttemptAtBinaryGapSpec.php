<?php

namespace tests\unit\App\BinaryGap;

use App\BinaryGap\SecondAttemptAtBinaryGap;
use PhpSpec\ObjectBehavior;

class SecondAttemptAtBinaryGapSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(SecondAttemptAtBinaryGap::class);
    }

    function it_returns_0_if_number_give_has_no_binary_gap()
    {
        $this->solution(0)->shouldReturn(0);
    }

    function it_returns_the_longest_binary_gap_for_5()
    {
        $this->solution(5)->shouldReturn(1);
    }

    function it_returns_the_longest_binary_gap_for_9()
    {
        $this->solution(9)->shouldReturn(2);
    }

    function it_returns_the_longest_binary_gap_for_21()
    {
        $this->solution(21)->shouldReturn(1);
    }
//
//    function it_returns_the_longest_binary_gap_for_37()
//    {
//        $this->solution(37)->shouldReturn(2);
//    }
//
//    function it_returns_the_longest_binary_gap_for_41()
//    {
//        $this->solution(41)->shouldReturn(2);
//    }
}
