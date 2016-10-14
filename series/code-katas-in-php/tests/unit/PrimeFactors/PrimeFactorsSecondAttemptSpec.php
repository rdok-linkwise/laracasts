<?php

namespace tests\unit\App\PrimeFactors;

use App\PrimeFactors\PrimeFactorsSecondAttempt;
use PhpSpec\ObjectBehavior;

class PrimeFactorsSecondAttemptSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(PrimeFactorsSecondAttempt::class);
    }

    function it_computes_prime_number_for_one()
    {
        $this->generate(1)->shouldReturn([]);
    }

    function it_computes_prime_number_for_two()
    {
        $this->generate(2)->shouldReturn([2]);
    }

    function it_computes_prime_number_for_three()
    {
        $this->generate(3)->shouldReturn([3]);
    }

    function it_computes_prime_number_for_four()
    {
        $this->generate(4)->shouldReturn([2, 2]);
    }

    function it_computes_prime_number_for_five()
    {
        $this->generate(5)->shouldReturn([5]);
    }

    function it_computes_prime_number_for_six()
    {
        $this->generate(6)->shouldReturn([2, 3]);
    }

    function it_computes_prime_number_for_eight()
    {
        $this->generate(8)->shouldReturn([2, 2, 2]);
    }

    function it_computes_prime_number_for_nine()
    {
        $this->generate(9)->shouldReturn([3, 3]);
    }
}
