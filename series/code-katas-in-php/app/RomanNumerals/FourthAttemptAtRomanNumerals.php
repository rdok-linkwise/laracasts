<?php

namespace App\RomanNumerals;

class FourthAttemptAtRomanNumerals
{
    private static $numerals = [
        5 => 'V',
        4 => 'IV'
    ];

    public function generate($number)
    {
        $output = '';
        $counter = $number;

        foreach (self::$numerals as $key => $glyph) {
            if ($number >= $key) {
                $output .= self::$numerals[$counter];
                $number -= $key;
            }
        }

        $output .= str_repeat('I', $number);

        return $output;
    }
}
