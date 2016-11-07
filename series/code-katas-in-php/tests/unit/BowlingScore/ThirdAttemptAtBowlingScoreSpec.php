<?php

namespace tests\unit\App\BowlingScore;

use App\BowlingScore\ThirdAttemptAtBowlingScore;
use PhpSpec\ObjectBehavior;

class ThirdAttemptAtBowlingScoreSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(ThirdAttemptAtBowlingScore::class);
    }

    function it_scores_a_gutter_game()
    {
        $this->rollTimes(20, 0);

        $this->score()->shouldReturn(0);
    }

    public function rollTimes($times, $score)
    {
        for ($round = 0; $round < $times; $round++) {
            $this->roll($score);
        }
    }

    function it_scores_a_game_without_any_strikes_or_spares()
    {
        $this->rollTimes(20, 1);

        $this->score()->shouldReturn(20);
    }

    function it_scores_a_spare()
    {
        $this->roll(3);
        $this->roll(7);
        $this->roll(3); // 6

        $this->rollTimes(17, 0);

        $this->score()->shouldReturn(16);
    }
}
