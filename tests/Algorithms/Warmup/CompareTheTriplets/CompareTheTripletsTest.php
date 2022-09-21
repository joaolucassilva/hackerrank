<?php

namespace App\Tests\Algorithms\Warmup\CompareTheTriplets;

use App\Algorithms\Warmup\CompareTheTriplets\CompareTriplets;
use PHPUnit\Framework\TestCase;

class CompareTheTripletsTest extends TestCase
{
    /**
     * @param array<int> $pointsOne
     * @param array<int> $pointsTwo
     * @param string $expected
     * @return void
     * @dataProvider valuesTriplets
     */
    public function testWhenTripletsPoints(array $pointsOne, array $pointsTwo, string $expected): void
    {
        $compareTriplets = new CompareTriplets();

        $this->assertSame($expected, $compareTriplets->runSolution($pointsOne, $pointsTwo));
    }

    /**
     * @return  array<int, array<int, array<int, int>|string>>
     */
    public function valuesTriplets(): array
    {
        return [
            [[17, 28, 30], [99, 16, 8], "2 1"],
            [[1, 2, 3], [3, 2, 1], "1 1"],
            [[5, 6, 7], [3, 6, 10], "1 1"],
        ];
    }
}
