<?php

namespace tests\unit\App\BowlingScore;

use App\BowlingScore\FirstAttemptAtBowlingScore;
use PhpSpec\ObjectBehavior;

class FirstAttemptAtBowlingScoreSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(FirstAttemptAtBowlingScore::class);
    }

    function it_scores_a_perfect_game()
    {
        $this->rollTimes(12, 10);

        $this->score()->shouldReturn(300);
    }

    private function rollTimes($times, $value)
    {
        for ($index = 0; $index < $times; $index++) {
            $this->roll($value);
        }
    }

    function it_awards_a_one_roll_bonus_for_every_spare()
    {
        $this->roll(10);
        $this->roll(5);
        $this->roll(5);

        $this->rollTimes(17, 0);

        $this->score()->shouldReturn(30);
    }

    function it_awards_a_two_roll_bonuses_for_every_strike()
    {
        $this->roll(7);
        $this->roll(3);
        $this->roll(5);

        $this->rollTimes(17, 0);

        $this->score()->shouldReturn(20);
    }

    function it_scores_a_game_without_any_strikes_or_spares()
    {
        $this->rollTimes(20, 1);

        $this->score()->shouldReturn(20);
    }

    function it_scores_a_gutter_game()
    {
        $this->rollTimes(10, 0);

        $this->score()->shouldBe(0);
    }
}
