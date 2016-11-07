<?php

namespace App\BowlingScore;

class ThirdAttemptAtBowlingScore
{
    private $frames;

    public function score()
    {
        $sum = 0;
        $totalFrames = sizeof($this->frames);

        for ($round = 0; $round < 20; $round++) {
            $sum += $this->frames[$round];

            if ($round - 2 < 0) {
                continue;
            }

//            // strike must be before spare in case use scores 10, then 0 (and be returned)
//            if ($this->frames[$round - 1] == 10 || $this->frames[$round - 2] == 10) {
//                $sum = $sum + $sum;
//            }

            if ($this->isSpare($round)) {
                $sum = $sum + $this->frames[$round];
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

    public function roll($score)
    {
        $this->frames[] = $score;
    }
}
