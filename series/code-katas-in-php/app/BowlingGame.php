<?php

namespace App;

class BowlingGame
{
    protected $frame = 0;
    protected $rolls = [];

    public function roll($pin)
    {
        $this->rolls[] = $pin;
    }

    public function score()
    {
        return array_sum($this->rolls);
    }
}
