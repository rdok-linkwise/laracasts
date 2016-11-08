<?php

namespace App\BowlingScore;

/**
 * Class FourthAttemptAtBowlingScore
 * @package App\BowlingScore
 */
class FourthAttemptAtBowlingScore
{
    /**
     * @var array
     */
    private $frames = [];

    /**
     * @param $score
     */
    public function roll($score)
    {
        $this->frames[] = $score;
    }

    /**
     * @return int|mixed
     */
    public function score()
    {
        $totalScore = 0;
        $totalFrames = count($this->frames);

        for ($index = 0; $index < $totalFrames; $index++) {

            $totalScore += $this->frames[$index];

            if ($this->isStrike($index)) {
                $totalScore += $this->frames[$index + 1] + $this->frames[$index + 2];

                $totalFrames -= 1;

                continue;
            }

            if ($this->isSpare($index)) {
                $totalScore += $this->frames[$index + 1];
            }
        }

        return $totalScore;
    }

    /**
     * @param $index
     * @return bool
     */
    private function isStrike($index)
    {
        return 10 == $this->frames[$index];
    }

    /**
     * @param $index
     * @return bool
     */
    private function isSpare($index)
    {
        return $index > 0 && 10 == $this->frames[$index] + $this->frames[$index - 1];
    }
}
