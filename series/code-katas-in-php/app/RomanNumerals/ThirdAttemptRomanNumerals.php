<?php

namespace App\RomanNumerals;

class ThirdAttemptRomanNumerals
{
    private static $specialGlyph = [
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
    ];

    public function convert($number)
    {
        $output = '';

        foreach (self::$specialGlyph as $key => $glyph) {
            if ($number >= $key) {
                $output .= $glyph;
                $number -= $key;
            }
        }

        $output .= str_repeat('I', $number);

        return $output;
    }
}
