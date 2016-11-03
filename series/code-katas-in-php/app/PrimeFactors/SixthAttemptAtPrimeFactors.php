<?php

namespace App\PrimeFactors;

class SixthAttemptAtPrimeFactors
{
    public function generate($number)
    {
        $output = [];

        while ($number % 2 == 0 && $number > 2) {
            $output[] = 2;
            $number /= 2;
        }

        if ($number > 1) {
            $output[] = $number;
        }

        return $output;
    }
}
