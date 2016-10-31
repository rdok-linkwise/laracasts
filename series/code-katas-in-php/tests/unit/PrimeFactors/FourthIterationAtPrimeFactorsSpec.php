<?php

namespace tests\unit\App\PrimeFactors;

use App\PrimeFactors\FourthIterationAtPrimeFactors;
use PhpSpec\ObjectBehavior;

class FourthIterationAtPrimeFactorsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(FourthIterationAtPrimeFactors::class);
    }

    function it_generates_the_prime_factors_of_1()
    {
        $this->generate(1)->shouldReturn([]);
    }

    function it_generates_the_prime_factors_of_2()
    {
        $this->generate(2)->shouldReturn([2]);
    }

    function it_generates_the_prime_factors_of_3()
    {
        $this->generate(3)->shouldReturn([3]);
    }

    function it_generates_the_prime_factors_of_4()
    {
        $this->generate(4)->shouldReturn([2, 2]);
    }

    function it_generates_the_prime_factors_of_5()
    {
        $this->generate(5)->shouldReturn([5]);
    }

    function it_generates_the_prime_factors_of_6()
    {
        $this->generate(6)->shouldReturn([2, 3]);
    }

    function it_generates_the_prime_factors_of_7()
    {
        $this->generate(7)->shouldReturn([7]);
    }

    function it_generates_the_prime_factors_of_8()
    {
        $this->generate(8)->shouldReturn([2, 2, 2]);
    }

    function it_generates_the_prime_factors_of_9()
    {
        $this->generate(9)->shouldReturn([3, 3]);
    }

    function it_generates_the_prime_factors_of_10()
    {
        $this->generate(10)->shouldReturn([2, 5]);
    }

    function it_generates_the_prime_factors_of_11()
    {
        $this->generate(11)->shouldReturn([11]);
    }

    function it_generates_the_prime_factors_of_12()
    {
        $this->generate(12)->shouldReturn([2, 2, 3]);
    }

    function it_generates_the_prime_factors_of_25()
    {
        $this->generate(25)->shouldReturn([5, 5]);
    }

    function it_generates_the_prime_factors_of_36()
    {
        $this->generate(36)->shouldReturn([2, 2, 3, 3]);
    }

    function it_generates_the_prime_factors_of_49()
    {
        $this->generate(49)->shouldReturn([7, 7]);
    }

    function it_generates_the_prime_factors_of_81()
    {
        $this->generate(81)->shouldReturn([3, 3, 3, 3]);
    }
}
