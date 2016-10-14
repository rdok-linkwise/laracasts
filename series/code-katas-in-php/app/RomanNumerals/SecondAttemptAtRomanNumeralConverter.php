<?php

namespace App\RomanNumerals;

class SecondAttemptAtRomanNumeralConverter
{
    private static $lookup = [
        40 => 'XL',
        10 => 'X',
        5 => 'V',
    ];

    public function convert($number)
    {
        $output = '';

        foreach (self::$lookup as $limit => $glyph) {
            while ($number >= $limit) {
                $output .= $glyph;
                $number -= $limit;
            }
        }

        return $output . str_repeat('I', $number);
    }
}
