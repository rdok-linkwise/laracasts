<?php

namespace tests\unit\App\FizzBuzz;

use App\FizzBuzz\FirstAttemptAtFizzBuzz;
use PhpSpec\ObjectBehavior;

class FirstAttemptAtFizzBuzzSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(FirstAttemptAtFizzBuzz::class);
    }

    function it_translates_1_for_fizz_buzz()
    {
        $this->execute(1)->shouldReturn(1);
    }

    function it_translates_2_for_fizz_buzz()
    {
        $this->execute(2)->shouldReturn(2);
    }

    function it_translates_3_for_fizz_buzz()
    {
        $this->execute(3)->shouldReturn('Fizz');
    }

    function it_translates_4_for_fizz_buzz()
    {
        $this->execute(4)->shouldReturn(4);
    }

    function it_translates_5_for_fizz_buzz()
    {
        $this->execute(5)->shouldReturn('Buzz');
    }

    function it_translates_15_for_fizz_buzz()
    {
        $this->execute(15)->shouldReturn('FizzBuzz');
    }

    function it_translates_a_sequence_of_numbers_for_fizz_buzz()
    {
        $this->executeUpTo(10)->shouldReturn([
            1, 2, 'Fizz', 4, 'Buzz', 'Fizz', 7, 8, 'Fizz', 'Buzz'
        ]);
    }
}
