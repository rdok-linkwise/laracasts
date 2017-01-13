<?php

namespace App\BinaryGap;

class ThirdAttemptAtBinaryGap
{
    public function generate($number)
    {
        $rawBinary = decbin($number);

        $binary = trim($rawBinary, 0);

        $totalPatterns = explode('1', $binary);

        $binaryCounts = [];

        foreach($totalPatterns as $pattern)
        {
            $binaryCounts[] = substr_count($pattern, '0');
        }

        return max($binaryCounts);
    }
}
