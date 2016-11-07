<?php

namespace App\PrimeFactors;

class SeventhAttemptAtPrimeFactors
{
    public function generate($number)
    {
        $output = [];

        for ($tester = 2; $tester < $number; $tester++) {
            for ($number /= $tester; $number % $tester == 0;) {
                $output[] = $tester;
            }
        }

        if ($number > 1) {
            $output[] = $number;
        }

        return $output;
    }
}
