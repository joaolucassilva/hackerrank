<?php

namespace App\Algorithms\Warmup\AVeryBigSum;

class AVeryBigSum
{
    /**
     * @param array<int, int> $numbers
     * @return int
     */
    public function sum(array $numbers): int
    {
        $countValues = count($numbers);
        $sumValues = 0;
        for ($x = 0; $x < $countValues; $x++) {
            $sumValues += $numbers[$x];
        }

        return $sumValues;
    }
}
