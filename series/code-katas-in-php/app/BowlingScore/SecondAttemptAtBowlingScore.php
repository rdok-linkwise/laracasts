<?php

namespace App\BowlingScore;

class SecondAttemptAtBowlingScore
{
    private $frames = [];

    public function roll($score)
    {
        $this->frames[] = $score;
    }

    public function score()
    {
        $sum = 0;
        $rounds = 20;

        for ($round = 0; $round < $rounds; $round++) {
            $sum += $this->frames[$round];

            if ($this->frames[$round] == 10) {
                $rounds--;
                $sum += $this->frames[$round + 1] + $this->frames[$round + 2];
            }

            if ($round <= 1) {
                continue;
            }

            if ($this->isSpare($round)) {
                $sum += $this->frames[$round];
            }
        }

        return $sum;
    }

    /**
     * @param $round
     * @return bool
     */
    private function isSpare($round)
    {
        return 10 == $this->frames[$round - 1] + $this->frames[$round - 2];
    }
}
