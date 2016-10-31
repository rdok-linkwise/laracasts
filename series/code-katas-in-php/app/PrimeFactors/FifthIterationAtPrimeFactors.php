<?php

namespace App\PrimeFactors;

class FifthIterationAtPrimeFactors
{
    public function generate($number)
    {
        $primes = [];

        for ($prime = 2; $prime < $number; $prime++) {
            for (; $number % $prime == 0; $number /= $prime) {
                $primes[] = $prime;
            }
        }

        return $number > 1 ? array_merge($primes, [$number]) : $primes;
    }
}
