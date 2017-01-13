<?php

namespace tests\unit\App\PrimeFactors;

use App\PrimeFactors\EighthKataAtPrimeFactors;
use PhpSpec\ObjectBehavior;

class EighthKataAtPrimeFactorsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(EighthKataAtPrimeFactors::class);
    }

    function it_generates_the_prime_factors_of_one()
    {
        $this->generate(1)->shouldReturn([]);
    }

    function it_generates_the_prime_factors_of_two()
    {
        $this->generate(2)->shouldReturn([2]);
    }

    function it_generates_the_prime_factors_of_three()
    {
        $this->generate(3)->shouldreturn([3]);
    }

    function it_generates_the_prime_factors_of_four()
    {
        $this->generate(4)->shouldreturn([2, 2]);
    }

    function it_generates_the_prime_factors_of_five()
    {
        $this->generate(5)->shouldreturn([5]);
    }

    function it_generates_the_prime_factors_of_six()
    {
        $this->generate(6)->shouldreturn([2, 3]);
    }

    function it_generates_the_prime_factors_of_seven()
    {
        $this->generate(7)->shouldreturn([7]);
    }

    function it_generates_the_prime_factors_of_eight()
    {
        $this->generate(8)->shouldreturn([2, 2, 2]);
    }

    function it_generates_the_prime_factors_of_nine()
    {
        $this->generate(9)->shouldreturn([3, 3]);
    }
}
