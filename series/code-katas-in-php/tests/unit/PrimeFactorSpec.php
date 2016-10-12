<?php

namespace tests\unit\App;

use App\PrimeFactor;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PrimeFactorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(PrimeFactor::class);
    }
}
