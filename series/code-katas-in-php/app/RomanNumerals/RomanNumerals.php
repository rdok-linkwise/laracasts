<?php

namespace App\RomanNumerals;

class RomanNumerals
{
    public function translate($number)
    {
        return $this->convertDoubleNumber($number) . $this->convertSingleNumber(substr($number, -1));
    }

    private function convertDoubleNumber($number)
    {
        $output = '';

        switch (true) {
            case $number >= 90:
                $output = 'XC';
                break;
            case $number >= 80:
                $output = 'LXXX';
                break;
            case $number >= 70:
                $output = 'LXX';
                break;
            case $number >= 60:
                $output = 'LX';
                break;
            case $number >= 50:
                $output = 'L';
                break;
            case $number >= 40:
                $output = 'XL';
                break;
            case $number >= 30:
                $output = 'XXX';
                break;
            case $number >= 20:
                $output = 'XX';
                break;
            case $number >= 10:
                $output = 'X';
                break;
        }

        return $output;
    }

    private function convertSingleNumber($number)
    {
        $output = '';

        switch ($number) {
            case 1:
                $output = 'I';
                break;
            case 2:
                $output = 'II';
                break;
            case 3:
                $output = 'III';
                break;
            case 4:
                $output = 'IV';
                break;
            case 5:
                $output = 'V';
                break;
            case 6:
                $output = 'VI';
                break;
            case 7:
                $output = 'VII';
                break;
            case 8:
                $output = 'VIII';
                break;
            case 9:
                $output = 'IX';
                break;
        }

        return $output;
    }
}
