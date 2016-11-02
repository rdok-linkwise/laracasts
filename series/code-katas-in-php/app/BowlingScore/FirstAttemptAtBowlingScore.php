<?php

namespace App\BowlingScore;

class FirstAttemptAtBowlingScore
{
    private $frames;

    public function roll($frame)
    {
        $this->frames[] = $frame;
    }

    public function score()
    {
        $totalScore = 0;

        for ($index = 0; $index < $this->sizeOf(); $index++) {
            if ($this->isStrike($index)) {
                $totalScore += $this->frames[$index] + $this->frames[$index + 1] + $this->frames[$index + 2];
            } else {
                if ($this->isSpare($index)) {
                    $totalScore += $this->frames[$index] * 2;
                } else {
                    $totalScore += $this->frames[$index];
                }
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
        return $this->frames[$index] == 10 && $index < $this->sizeOf() - 3;
    }

    public function sizeOf()
    {
        return empty($this->totalFrames) ? sizeof($this->frames) : $this->totalFrames;
    }

    private function isSpare($index)
    {
        return $index > 1 && $index < $this->sizeOf() - 1 && $this->frames[$index - 1] + $this->frames[$index - 2] == 10;
    }
}
