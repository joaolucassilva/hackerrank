<?php

namespace App\Tests\Algorithms\Warmup\SolveMeFirst;

use App\Algorithms\Warmup\SolveMeFirst\SolveMeFirst;
use PHPUnit\Framework\TestCase;

class SolveMeFirstTest extends TestCase
{
    /**
     * @dataProvider sumNumbers
     */
    public function testSolveMeFirst(int $firstNumber, int $secondNumber, int $expected): void
    {
        $solveMeFisrt = new SolveMeFirst();

        $this->assertSame($expected, $solveMeFisrt->resolve($firstNumber, $secondNumber));
    }

    /**
     * @return array<int, array<int, int>>
     */
    public function sumNumbers(): array
    {
        return [
            [7, 3, 10],
            [2, 3, 5],
        ];
    }
}
