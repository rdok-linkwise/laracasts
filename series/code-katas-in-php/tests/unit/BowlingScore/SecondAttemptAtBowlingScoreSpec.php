<?php

namespace tests\unit\App\BowlingScore;

use App\BowlingScore\SecondAttemptAtBowlingScore;
use PhpSpec\ObjectBehavior;

class SecondAttemptAtBowlingScoreSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(SecondAttemptAtBowlingScore::class);
    }

    function it_makes_a_gutter_game()
    {
        $this->rollTimes(20, 0);

        $this->score()->shouldReturn(0);
    }

    private function rollTimes($times, $score)
    {
        for ($round = 1; $round <= $times; $round++) {
            $this->roll($score);
        }
    }

    function it_scores_a_spare()
    {
        $this->roll(3);
        $this->roll(7);
        $this->roll(1);

        $this->rollTimes(17, 0);

        $this->score()->shouldReturn(12);
    }

    function it_scores_a_strike()
    {
        $this->roll(10);
        $this->roll(3);

        $this->rollTimes(17, 0);

        $this->score()->shouldReturn(16);
    }

    function it_scores_a_game_without_any_strikes_or_spares()
    {
        $this->rollTimes(20, 1);

        $this->score()->shouldReturn(20);
    }

    function it_scores_a_perfect_game()
    {
        $this->rollTimes(20, 10);

        $this->score()->shouldReturn(300);
    }

    function it_scores_two_strikes_at_the_start()
    {
        $this->roll(10);
        $this->roll(10);
        $this->roll(1);
        $this->roll(1);
        $this->roll(1);

        $this->rollTimes(13, 0);

        $this->score()->shouldReturn(36);
    }
}
