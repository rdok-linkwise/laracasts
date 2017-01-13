<?php

namespace App\InsertionSort;

class ThirdAttemptAtIterationSort
{
    public function sort(array $numbers)
    {
        $totalNumbers = count($numbers);

        $sortedNumbers = [];

        for($index = 0; $index < $totalNumbers; $index++)
        {
           $minIndex = array_search(min($numbers), $numbers); 

           $sortedNumbers[$index] = $numbers[$minIndex];

           unset($numbers[$minIndex]);
        }

        return $sortedNumbers;
    }
}
