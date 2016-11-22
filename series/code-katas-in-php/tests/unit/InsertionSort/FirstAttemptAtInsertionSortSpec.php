<?php

namespace tests\unit\App\InsertionSort;

use App\InsertionSort\FirstAttemptAtInsertionSort;
use PhpSpec\ObjectBehavior;

class FirstAttemptAtInsertionSortSpec extends ObjectBehavior
{
    protected $dataSet = [5, 2, 4, 6, 1, 3];

    function it_is_initializable()
    {
        $this->shouldHaveType(FirstAttemptAtInsertionSort::class);
    }

    function it_returns_same_array_if_its_sorted()
    {
        $this->sort([1, 2])->shouldReturn([1, 2]);

        $this->sort([1, 5, 10])->shouldReturn([1, 5, 10]);
    }

    function it_sorts_an_array_with_two_elements()
    {
       $this->sort([2, 1])->shouldReturn([1, 2]);
    }

    function it_sorts_an_array_with_three_elements()
    {
        $this->sort([3, 1, 2])->shouldReturn([1, 2, 3]);
    }

    function it_sorts_an_array_with_three_elements_requiring_more_than_one_iteration()
    {
        $this->sort([3, 2, 1])->shouldReturn([1, 2, 3]);
    }

    function it_sorts_an_array_with_four_elements_requiring_more_than_one_iteration()
    {
        $this->sort([4, 3, 2, 1])->shouldReturn([1, 2, 3, 4]);
    }
}
