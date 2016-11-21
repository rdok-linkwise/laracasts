<?php

namespace tests\unit\App\StringCalculator;

use App\StringCalculator\SecondAttemptAtStringCalculator;
use InvalidArgumentException;
use PhpSpec\ObjectBehavior;

class SecondAttemptAtStringCalculatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(SecondAttemptAtStringCalculator::class);
    }

    function it_adds_two_numbers()
    {
        $this->add('1,2')->shouldReturn(3);

        $this->add('3,5')->shouldReturn(8);
    }

    function it_translates_empty_string_to_zero()
    {
        $this->add('')->shouldReturn(0);
    }

    function it_finds_the_sum_of_one_number()
    {
        $this->add('5')->shouldReturn(5);
    }

    function it_finds_the_sum_of_any_amount_of_numbers()
    {
        $this->add('1,3,6,5,3,2')->shouldReturn(20);
    }

    function it_dissalows_negative_numbers()
    {
        $this->shouldThrow(new InvalidArgumentException('Negative numbers are not allowed.'))
            ->duringAdd('-5');
    }

    function it_ignores_any_number_that_is_1000_or_greater()
    {
        $this->add('3,1000,2000')->shouldReturn(3);
    }
}
