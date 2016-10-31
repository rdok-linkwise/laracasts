<?php

namespace App\RomanNumerals;

class FifthAttemptAtRomanNumerals
{
    private static $glyphs = [
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
    ];

    public function generate($number)
    {
        $output = '';

        foreach (self::$glyphs as $value => $glyph) {
            if ($number >= $value) {
                $output .= $glyph;
                $number -= $value;
            }
        }

        return $output . str_repeat('I', $number);
    }
}
