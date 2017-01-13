<?php

namespace App\BinaryGap;

class SecondAttemptAtBinaryGap
{
    public function solution($number)
    {
        $rawBinary = decbin($number);
        $binary = trim($rawBinary, 0);
        $binaryLength = strlen($binary);

        $counter = 0;
        $gaps[$counter] = 0;

        for ($index = 0; $index < $binaryLength; $index++) {
            $character = substr($binary, $index, 1);

            if ($character == 0) {
                $gaps[$counter]++;
            } else {
                $counter++;
                $gaps[$counter] = 0;
            }
        }

        return max($gaps);
    }
}
