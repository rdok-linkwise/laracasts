<?php

namespace App\PrimeFactors;

class EighthKataAtPrimeFactors
{
    public function generate($number)
    {
        $output = [];
        $counter = 2;

        while($counter < $number)
        {
            while($number % $counter == 0) 
            {
                $output[] = $counter;

                $number /= $counter;
            } 

            $counter++;
        }


        if(1 < $number)
        {
            $output[] = $number;
        }

        return $output;
    }
}
