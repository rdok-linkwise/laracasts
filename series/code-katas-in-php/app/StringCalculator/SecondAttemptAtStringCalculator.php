<?php

namespace App\StringCalculator;

const MAX_ALLOWED_NUMBER = 1000;

class SecondAttemptAtStringCalculator
{
    public function add($numbers)
    {
        $numbers = explode(',', $numbers);

        return array_sum(array_filter($numbers, function ($number) {
            $number = (int)$number;

            if (0 > $number) {
                throw new \InvalidArgumentException('Negative numbers are not allowed.');
            }

            return $number < MAX_ALLOWED_NUMBER;
        }));
    }
}
