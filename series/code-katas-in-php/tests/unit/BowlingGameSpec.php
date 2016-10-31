<?php

namespace tests\unit\App;

use App\BowlingGame;
use PhpSpec\ObjectBehavior;

class BowlingGameSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(BowlingGame::class);
    }

    function it_scores_a_gutter_game_as_zero()
    {
        $this->rollWithScoreTimes(0);

        $this->score()->shouldBe(0);
    }

    private function rollWithScoreTimes($score, $times = 20)
    {
        for ($index = 0; $index < $times; $index++) {
            $this->roll($score);
        }
    }

    function it_scores_the_sum_of_all_knocked_down_pins_for_a_game()
    {
        $this->rollWithScoreTimes(1);

        $this->score()->shouldBe(20);
    }

//    function it_awards_one_roll_bonus_for_every_spare()
//    {
//        $this->roll(2);
//        $this->roll(8); // We got a spare
//        $this->roll(5);
//
//        $this->rollWithScoreTimes(0, 17);
//
//        $this->score()->shouldBe(20);
//    }
}
