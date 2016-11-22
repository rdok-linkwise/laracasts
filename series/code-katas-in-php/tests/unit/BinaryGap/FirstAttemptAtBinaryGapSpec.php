<?php

namespace tests\unit\App\BinaryGap;

use App\BinaryGap\FirstAttemptAtBinaryGap;
use PhpSpec\ObjectBehavior;

/**
 *
 * A binary gap within a positive integer N is any maximal sequence of consecutive zeros that is surrounded by ones at
 * both ends in the binary representation of N.
 *
 * For example, number 9 has binary representation 1001 and contains a binary gap of length 2. The number 529 has
 * binary representation 1000010001 and contains two binary gaps: one of length 4 and one of length 3. The number 20
 * has binary representation 10100 and contains one binary gap of length 1. The number 15 has binary representation
 * 1111 and has no binary gaps.
 *
 * Write a function:
 *
 * function solution($N);
 * that, given a positive integer N, returns the length of its longest binary gap. The function should return 0 if N
 * doesn't contain a binary gap.
 *
 * For example, given N = 1041 the function should return 5, because N has binary representation 10000010001 and so
 * its longest binary gap is of length 5.
 *
 * Assume that:
 *
 * N is an integer within the range [1..2,147,483,647].
 *
 * Complexity:
 * expected worst-case time complexity is O(log(N));
 * expected worst-case space complexity is O(1).
 *
 * Class FirstAttemptAtBinaryGapSpec
 * @package tests\unit\App\BinaryGap
 */
class FirstAttemptAtBinaryGapSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(FirstAttemptAtBinaryGap::class);
    }

    function it_returns_0_if_number_give_has_no_binary_gap()
    {
        $this->solution(0)->shouldReturn(0);

    }

    function it_returns_0_if_for_binary_gap_of_32()
    {
        $this->solution(32)->shouldReturn(0);

    }

    function it_returns_0_if_for_binary_gap_of_127()
    {
        $this->solution(127)->shouldReturn(0);

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

    function it_returns_the_longest_binary_gap_for_37()
    {
        $this->solution(37)->shouldReturn(2);
    }

    function it_returns_the_longest_binary_gap_for_69()
    {
        $this->solution(69)->shouldReturn(3);
    }
}
