<?php

namespace App\Tennis;

class FirstAttemptAtTennis
{
    private $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty',
        4 => 'Advantage for'
    ];

    /**
     * @var Player
     */
    private $player1;
    /**
     * @var Player
     */
    private $player2;

    /**
     * FirstAttemptAtTennis constructor.
     * @param Player $player1
     * @param Player $player2
     */
    public function __construct(Player $player1, Player $player2)
    {
        $this->player1 = $player1;
        $this->player2 = $player2;
    }

    public function score()
    {
        if ($this->hasWinner()) {
            return 'Win for ' . $this->winner()->name;
        }

        if ($this->hasTheAdvantage()) {
            return 'Advantage for ' . $this->winner()->name;
        }

        if ($this->isDeuce()) {
            return 'Deuce';
        }

        if ($this->tied()) {
            return $this->lookup[$this->player1->score] . '-All';
        }

        return $this->lookup[$this->player1->score] . '-' . $this->lookup[$this->player2->score];
    }

    private function hasWinner()
    {
        return $this->hasEnoughPointsToBeWon() && $this->isLeadingBy(2);
    }

    /**
     * @return bool
     */
    private function hasEnoughPointsToBeWon()
    {
        return max($this->player1->score, $this->player2->score) > 3;
    }

    private function isLeadingBy($number)
    {
        return abs($this->player1->score - $this->player2->score) >= $number;
    }

    private function winner()
    {
        return $this->player1->score > $this->player2->score ? $this->player1 : $this->player2;
    }

    private function hasTheAdvantage()
    {
        return $this->hasEnoughPointsToBeWon() && $this->isLeadingBy(1);
    }

    private function isDeuce()
    {
        return $this->player1->score == 3 && $this->player2->score == 3;
    }

    /**
     * @return bool
     */
    private function tied()
    {
        return $this->player1->score == $this->player2->score;
    }

}
