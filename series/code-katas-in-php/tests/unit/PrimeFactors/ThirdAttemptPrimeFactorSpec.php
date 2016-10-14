<?php

namespace tests\unit\App\PrimeFactors;

use App\PrimeFactors\ThirdAttemptPrimeFactor;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ThirdAttemptPrimeFactorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(ThirdAttemptPrimeFactor::class);
    }

    function it_generate_the_prime_factor_for_one(){
        $this->generate(1)->shouldReturn([]);
    }

    function it_generate_the_prime_factor_for_two(){
        $this->generate(2)->shouldReturn([2]);
    }

    function it_generate_the_prime_factor_for_three(){
        $this->generate(3)->shouldReturn([3]);
    }

    function it_generate_the_prime_factor_for_four(){
        $this->generate(4)->shouldReturn([2, 2]);
    }

    function it_generate_the_prime_factor_for_eight(){
        $this->generate(8)->shouldReturn([2, 2, 2]);
    }

    function it_generate_the_prime_factor_for_nine(){
        $this->generate(9)->shouldReturn([3, 3]);
    }

    function it_generate_the_prime_factor_for_twenty_five(){
        $this->generate(25)->shouldReturn([5, 5]);
    }
    function it_generate_the_prime_factor_for_102(){
        $this->generate(102)->shouldReturn([2, 3, 17]);
    }
}
