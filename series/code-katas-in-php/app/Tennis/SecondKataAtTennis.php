<?php

namespace App\Tennis;

use App\Tennis\SecondKata\Player;

class SecondKataAtTennis
{
    protected $player1;
    protected $player2;
    protected $rules = [
        'Love-All' => [0 , 0], 
        'Fifteen-Love' => [1 , 0], 
        'Love-Fifteen' => [0 , 1], 
        'Thirty-Love' => [2 , 0], 
        'Love-Thirty' => [0 , 2], 
        'Forty-Love' => [3 , 0], 
        'Love-Forty' => [0 , 3], 
        'Thirty-All' => [2 , 2], 
    ];

    public function __construct(Player $player1, Player $player2)
    {
        $this->player1 = $player1;

        $this->player2 = $player2;
    }

    public function score()
    {
        foreach($this->rules as $text => $values) 
        {
            if($this->player1->points() == $values[0] && $this->player2->points() == $values[1]) 
            {
                return $text;
            }
        }

        if($this->player1->points() - $this->player2->points() >= 2)
        {
            return 'Win for ' .  $this->player1->name();
        }

        if($this->player2->points() - $this->player1->points() >= 2)
        {
            return 'Win for ' .  $this->player2->name();
        }

        if($this->player2->points() == $this->player1->points())
        {
            return 'Deuce';
        }

    }
}
