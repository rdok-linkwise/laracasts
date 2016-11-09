<?php

namespace App\StringCalculator;

use InvalidArgumentException;

const MAX_NUMBER_ALLOWED = 1000;

class FirstAttemptAtStringCalculator
{
    public function add($numbers)
    {
        $numbers = $this->parseNumbers($numbers);

        $sum = 0;

        array_walk($numbers, function ($number) use (&$sum) {

            $this->guardAgainstInvalidArgument($number);

            if ($number > MAX_NUMBER_ALLOWED) {
                return;
            }

            $sum += (int)$number;
        });

        return $sum;
    }

    /**
     * @param $numbers
     * @return array
     */
    private function parseNumbers($numbers)
    {
        return array_map('intval', preg_split('/(,|\\\n|\ )/', $numbers));
    }

    /**
     * @param $number
     */
    function guardAgainstInvalidArgument($number)
    {
        if ($number < 0) {
            throw new InvalidArgumentException("Invalid argument provided: {$number}");
        }
    }
}
