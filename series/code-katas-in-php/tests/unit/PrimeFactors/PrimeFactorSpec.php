<?php

namespace tests\unit\App\PrimeFactors;

use App\PrimeFactors\PrimeFactor;
use PhpSpec\ObjectBehavior;

class PrimeFactorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(PrimeFactor::class);
    }

    function it_computes_the_prime_number_of_one()
    {
        $this->generate(1)->shouldReturn([]);
    }

    function it_computes_the_prime_number_of_two()
    {
        $this->generate(2)->shouldReturn([2]);
    }

    function it_computes_the_prime_number_of_three()
    {
        $this->generate(3)->shouldReturn([3]);
    }

    function it_computes_the_prime_number_of_four()
    {
        $this->generate(4)->shouldReturn([2, 2]);
    }

    function it_computes_the_prime_number_of_five()
    {
        $this->generate(5)->shouldReturn([5]);
    }

    function it_computes_the_prime_number_of_six()
    {
        $this->generate(6)->shouldReturn([2, 3]);
    }

    function it_computes_the_prime_number_of_nine()
    {
        $this->generate(9)->shouldReturn([3, 3]);
    }

    function it_computes_the_prime_number_of_ten()
    {
        $this->generate(10)->shouldReturn([2, 5]);
    }

    function it_computes_the_prime_number_of_twenty_five()
    {
        $this->generate(25)->shouldReturn([5, 5]);
    }

    function it_computes_the_prime_number_of_forty_nine()
    {
        $this->generate(49)->shouldReturn([7, 7]);
    }

    function it_computes_the_prime_number_of_hundred()
    {
        $this->generate(100)->shouldReturn([2, 2, 5, 5]);
    }
}
