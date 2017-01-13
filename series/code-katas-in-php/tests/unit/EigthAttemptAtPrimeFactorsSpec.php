<?php

namespace tests\unit\App;

use App\EigthAttemptAtPrimeFactors;
use PhpSpec\ObjectBehavior;

class EigthAttemptAtPrimeFactorsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(EigthAttemptAtPrimeFactors::class);
    }

    function it_generates_primes_for_one()
    {
        $this->generate(1)->shouldReturn([]);
    }

    function it_generates_primes_for_two()
    {
        $this->generate(2)->shouldReturn([2]);
    }

    function it_generates_primes_for_three()
    {
        $this->generate(3)->shouldReturn([3]);
    }

    function it_generates_primes_for_four()
    {
        $this->generate(4)->shouldReturn([2, 2]);
    }

    function it_generates_primes_for_eight()
    {
        $this->generate(8)->shouldReturn([2, 2, 2]);
    }
}
