<?php

namespace App\PrimeFactors;

class ThirdAttemptPrimeFactor
{
    public function generate($number)
    {
        $output = [];

        for ($counter = 2; $counter < $number; $counter++) {
            for (; $number % $counter == 0; $number /= $counter) {
                $output[] = $counter;
            }
        }

        if ($number > 1) {
            $output[] = $number;
        }

        return $output;
    }
}
