<?php

namespace tests\unit\App\BowlingScore;

use App\BowlingScore\FifthAttemptAtBowlingScore;
use PhpSpec\ObjectBehavior;

class FifthAttemptAtBowlingScoreSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(FifthAttemptAtBowlingScore::class);
    }

    function it_scores_a_strike()
    {
        $this->roll(10);

        $this->roll(3);

        $this->roll(6);

        $this->rollTimes(14);

        $this->score()->shouldReturn(28);
    }

    function it_scores_a_double()
    {
        $this->roll(10);

        $this->roll(10);

        $this->roll(9);

        $this->rollTimes(14);

        $this->score()->shouldReturn(57);
    }

    function it_scores_a_turkey()
    {
        $this->roll(10);

        $this->roll(10);

        $this->roll(10);

        $this->roll(0);

        $this->roll(9);

        $this->rollTimes(12);

        $this->score()->shouldReturn(78);
    }

    function it_scores_a_spare()
    {
        $this->roll(7);

        $this->roll(3);

        $this->roll(4);

        $this->roll(2);

        $this->rollTimes(16);

        $this->score()->shouldReturn(20);
    }
    
    function it_scores_a_last_spare()
    {
        $this->rollTimes(17);

        $this->roll(7);

        $this->roll(3);

        $this->roll(4);

        $this->score()->shouldReturn(18);
    }

    function it_scores_a_perfect_game()
    {
        $this->rollTimes(12, 10);

        $this->score()->shouldReturn(300);
    }
    // it scores all zero

    public function rollTimes($times, $score = 0)
    {
        for($index = 0; $index < $times; $index++) 
        {
            $this->roll($score);
        }
    }
}
