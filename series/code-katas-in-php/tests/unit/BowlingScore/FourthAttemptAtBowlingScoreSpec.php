<?php

namespace tests\unit\App\BowlingScore;

use App\BowlingScore\FourthAttemptAtBowlingScore;
use PhpSpec\ObjectBehavior;

class FourthAttemptAtBowlingScoreSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(FourthAttemptAtBowlingScore::class);
    }

//    function it_scores_a_gutter_game()
//    {
//        $this->rollTimes(20, 0);
//
//        $this->score()->shouldReturn(0);
//    }

    function rollTimes($times, $score)
    {
        for ($index = 0; $index < $times; $index++) {
            $this->roll($score);
        }
    }

    function it_scores_a_strike()
    {
        $this->roll(10);
        $this->roll(3);
        $this->roll(6);

        $this->rollTimes(17, 0);

        $this->score()->shouldReturn(28);
    }

    function it_scores_a_perfect_game()
    {
        $this->rollTimes(20, 10);

        $this->score()->shouldReturn(300);
    }

    function it_scores_a_spare()
    {
        $this->roll(7);
        $this->roll(3);
        $this->roll(4);
        $this->roll(2);

        $this->rollTimes(16, 0);

        $this->score()->shouldReturn(20);
    }
}
