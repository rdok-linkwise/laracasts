<?php

namespace App;

class EigthAttemptAtPrimeFactors
{
    public function generate($number)
    {
        $output = [];
        $dividor = 2;

        while ($dividor < $number) {
            if ($number % 2 == 0) {
                $output[] = 2;
                $number /= 2;
            }
            $dividor++;
        }

        if ($number > 1) {
            $output[] = $number;
        }

        return $output;
    }
}
