<?php

namespace App\FizzBuzz;

class SecondAttemptAtFizzBuzz
{
    public function execute($number)
    {
        if ($number % 15 == 0) return 'FizzBuzz';

        if ($number % 5 == 0) return 'Buzz';

        if ($number % 3 == 0) return 'Fizz';

        return $number;
    }

    public function executeUpTo($number)
    {
        return array_map([$this, 'execute'], range(1, $number));
    }
}
