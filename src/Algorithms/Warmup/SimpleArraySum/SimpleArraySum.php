<?php

namespace App\Algorithms\Warmup\SimpleArraySum;

class SimpleArraySum
{
    /**
     * @param array<int> $arraySum
     * @return int
     */
    public function run(array $arraySum): int
    {
        $countArray = count($arraySum);
        $sum = 0;
        for ($x = 0; $x < $countArray; $x++) {
            $sum += $arraySum[$x];
        }

        return $sum;
    }
}