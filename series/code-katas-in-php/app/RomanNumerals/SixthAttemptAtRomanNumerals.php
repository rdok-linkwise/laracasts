<?php

namespace App\RomanNumerals;

class SixthAttemptAtRomanNumerals
{
    private static $romanNumerals = [
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV'
    ];

    public function generate($number)
    {
        $output = '';

        foreach (self::$romanNumerals as $numberKey => $romanNumeral) {
            if ($number >= $numberKey) {
                $output .= $romanNumeral;
                $number -= $numberKey;
            }
        }

        return $output . str_repeat('I', $number);
    }
}
