<?php

namespace tests\unit\App\PrimeFactors;

use App\PrimeFactors\SixthAttemptAtPrimeFactors;
use PhpSpec\ObjectBehavior;

class SixthAttemptAtPrimeFactorsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(SixthAttemptAtPrimeFactors::class);
    }

    function it_generates_the_prime_factor_of_one()
    {
        $this->generate(1)->shouldReturn([]);
    }

    function it_generates_the_prime_factor_of_two()
    {
        $this->generate(2)->shouldReturn([2]);
    }

    function it_generates_the_prime_factor_of_three()
    {
        $this->generate(3)->shouldReturn([3]);
    }

    function it_generates_the_prime_factor_of_four()
    {
        $this->generate(4)->shouldReturn([2, 2]);
    }
}
