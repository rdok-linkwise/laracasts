<?php
/**
 * @author Rizart Dokollari <r.dokollari@linkwi.se>
 * @since 11/9/16
 */

namespace App\Tennis;

/**
 * Class Player
 * @package App\Tennis
 */
class Player
{
    /**
     * @var
     */
    public $name;
    /**
     * @var int
     */
    public $score;

    /**
     * Player constructor.
     * @param $name
     * @param int $score
     */
    public function __construct($name, $score = 0)
    {
        $this->name = $name;

        $this->score = $score;
    }

    /**
     * @param $points
     */
    public function earnPoints($points)
    {
        $this->score += $points;
    }
}