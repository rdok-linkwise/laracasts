<?php

namespace App\RomanNumerals;

class SeventhAttemptAtRomanNumerals
{
    private static $glyphs = [
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
    ];

    public function generate($times)
    {
        $output = '';

        foreach (self::$glyphs as $number => $glyph) {
            if ($times < $number) {
                continue;
            }

            $output .= $glyph;
            $times -= $number;
        }

        return $output . str_repeat('I', $times);
    }
}
