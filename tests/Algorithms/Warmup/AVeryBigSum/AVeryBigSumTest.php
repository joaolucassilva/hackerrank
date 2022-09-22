<?php

namespace App\Tests\Algorithms\Warmup\AVeryBigSum;

use App\Algorithms\Warmup\AVeryBigSum\AVeryBigSum;
use PHPUnit\Framework\TestCase;

class AVeryBigSumTest extends TestCase
{
    /**
     * @dataProvider valuesToTest
     * @param array<int, int> $values
     * @param int $expected
     * @return void
     */
    public function testWhenSumIsValid(array $values, int $expected): void
    {
        $veryBigSum = new AVeryBigSum();
        $this->assertSame($expected, $veryBigSum->sum($values));
    }

    /**
     * @return array<int, array<int, array<int, int>|int>>
     */
    public function valuesToTest(): array
    {
        return [
            [[1000000001, 1000000002, 1000000003, 1000000004, 1000000005], 5000000015],
            [[1000000001, 1000000003, 1000000003, 1000000004, 1000000005], 5000000016],
        ];
    }
}
