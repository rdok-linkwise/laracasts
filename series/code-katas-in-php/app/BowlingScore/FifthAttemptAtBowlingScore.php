<?php

namespace App\BowlingScore;

class FifthAttemptAtBowlingScore
{
    protected $scores;

    public function roll($score)
    {
        return $this->scores[] = $score;
    }

    public function score()
    {
        $totalScores = count($this->scores);

        for($index = 0; $index < $totalScores - 2; $index++)
        {
            if($this->scores[$index] == 10 & $index < ($totalScores - 3))
            {
                $this->scores[$index] += $this->scores[$index + 1] + $this->scores[$index + 2];

                continue;
            } 

            if($this->scores[$index + 1] == 10 || $this->scores[$index + 2] == 10)
            {
                continue;
            }

            if(10 == $this->scores[$index] + $this->scores[$index + 1])
            {
                $this->scores[$index] += $this->scores[$index + 2];
            }
        }

        return array_sum($this->scores);
   }
}
