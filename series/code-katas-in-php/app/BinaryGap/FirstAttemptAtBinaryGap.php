<?php

namespace App\BinaryGap;

class FirstAttemptAtBinaryGap
{
    public function solution($number)
    {
        $digits = str_split(trim(decbin($number), 0));

        $binaryGapCounter = 0;

        $binaryGaps = [$binaryGapCounter => 0];

        for ($index = 1; $index < count($digits) - 1; $index++) {
            if ($digits[$index] == 0) {
                $binaryGaps[$binaryGapCounter]++;
                continue;
            }

            $binaryGapCounter++;

            $binaryGaps[$binaryGapCounter] = 0;
        }

        return max($binaryGaps);
    }
}
