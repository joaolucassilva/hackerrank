<?php

namespace App\Tests\Algorithms\Warmup\SimpleArraySum;

use App\Algorithms\Warmup\SimpleArraySum\SimpleArraySum;
use PHPUnit\Framework\TestCase;

class SimpleArraySumTest extends TestCase
{
    /**
     * @return void
     */
    public function testSumValues(): void
    {
        $sum = new SimpleArraySum();

        $expected = 6;
        $values = [1, 2, 3];
        $this->assertSame($expected, $sum->run($values));

        $expected = 31;
        $values = [1, 2, 3, 4, 10, 11];
        $this->assertSame($expected, $sum->run($values));
    }
}
