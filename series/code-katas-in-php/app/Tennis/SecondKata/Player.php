<?php

namespace App\Tennis\SecondKata;

class Player {
    protected $points = 0;
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    
    public function earnsPoints($points)
    {
        $this->points += $points;
    }

    public function points()
    {
        return $this->points;
    }

    public function name()
    {
        return $this->name;
    }
}
