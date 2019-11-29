<?php

use PHPUnit\Framework\TestCase;
use AtCoder\Sample;

/**
 * Class SampleTest
 */
class SampleTest extends TestCase
{
    /**
     * @dataProvider dataProviderB
     */
    public function testB($expected, $a, $b)
    {
        $sample = new Sample();
        $result = $sample->solveB($a, $b);
        $this->assertSame($expected, $result);
    }

    /**
     * @return Generator
     */
    public function dataProviderB()
    {
        // yield "0" => ["出力", "入力1", "入力2"];
        yield "1" => [7, "at", "coder"];
    }
}
