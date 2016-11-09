<?php

namespace tests\unit\App\StringCalculator;

use App\StringCalculator\FirstAttemptAtStringCalculator;
use InvalidArgumentException;
use PhpSpec\ObjectBehavior;

class FirstAttemptAtStringCalculatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(FirstAttemptAtStringCalculator::class);
    }

    function it_translates_an_empty_string_into_zero()
    {
        $this->add('')->shouldEqual(0);
    }

    function it_finds_the_sum_of_one_number()
    {
        $this->add('5')->shouldEqual(5);
    }

    function it_finds_the_sum_of_two_numbers()
    {
        $this->add('3,7')->shouldEqual(10);
    }

    function it_finds_the_sum_of_any_amount_of_numbers()
    {
        $this->add('1,2,3,4,5,6,7,8,9,10')->shouldEqual(55);
    }

    function it_dissalows_negative_numbers()
    {
        $this->shouldThrow(new InvalidArgumentException('Invalid argument provided: -1'))->duringAdd('-1,2');
    }

    function it_ignores_any_number_that_is_one_thousand_or_greater()
    {
        $this->add('5,2000')->shouldEqual(5);
    }

    function it_allows_for_new_line_delimiters()
    {
        $this->add('1\n2')->shouldEqual(3);
    }

    function it_allows_for_empty_space()
    {
        $this->add(' 1 , 2 \n  3 1')->shouldEqual(7);
    }
}
