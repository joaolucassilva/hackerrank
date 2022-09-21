<?php

namespace App\Algorithms\Warmup\CompareTheTriplets;

class CompareTriplets
{
    /**
     * @param array<int> $pointsOne
     * @param array<int> $pointsTwo
     * @return string
     */
    public function runSolution(array $pointsOne, array $pointsTwo): string
    {
        $result = [0, 0];
        $countPoints = count($pointsOne);
        for ($x = 0; $x < $countPoints; $x++) {
            if ($pointsOne[$x] > $pointsTwo[$x]) {
                $result[0]++;
            } elseif ($pointsOne[$x] < $pointsTwo[$x]) {
                $result[1]++;
            }
        }

        return "${result[0]} ${result[1]}";
    }
}
