<?php

namespace App\StringCalculator;

class ThirdAttemptAtStringCalculator
{
    public function add($rawNumbers)
    {
        $numbers = explode(',', $rawNumbers);
        $filteredNumbers = [];

        foreach($numbers as $number){
            if($number < 0){
                throw new \InvalidArgumentException('Negative numbers are not allowed.');
            }

            if($number >= 1000)
            {
                continue;
            }

            $filteredNumbers[] = $number;
        }

        return array_sum($filteredNumbers);
    }
}
