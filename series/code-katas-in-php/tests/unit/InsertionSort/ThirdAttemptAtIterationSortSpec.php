<?php

namespace tests\unit\App\InsertionSort;

use App\InsertionSort\ThirdAttemptAtIterationSort;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ThirdAttemptAtIterationSortSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(ThirdAttemptAtIterationSort::class);
    }

    function it_sorts_an_array_with_two_elements()
    {
        $this->sort([2, 1])->shouldReturn([1, 2]);
    }

    function it_sorts_an_array_with_three_elements()
    {
        $this->sort([3, 1, 2])->shouldReturn([1, 2, 3]);
    }

    function it_sorts_an_array_with_four_elements()
    {
        $this->sort([3, 1, 2, 5])->shouldReturn([1, 2, 3, 5]);
    }
}
