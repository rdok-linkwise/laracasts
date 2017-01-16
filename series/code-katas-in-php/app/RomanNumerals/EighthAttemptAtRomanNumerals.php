<?php

namespace App\RomanNumerals;

class EighthAttemptAtRomanNumerals
{
    protected static $glyphs = [
        'XX' => 20,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
    ];

    public function generate($number)
    {
        $output = '';

        foreach(self::$glyphs as $glyph => $value) 
        {

            if($number >= $value)
            {
                $output = $glyph;

                $number -= $value;
            }
        }


        return $output . str_repeat('I', $number);
    } 
}
