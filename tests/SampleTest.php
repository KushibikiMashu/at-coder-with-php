<?php

use PHPUnit\Framework\TestCase;
use AtCoder\Sample;

/**
 * Class SampleTest
 */
class SampleTest extends TestCase
{
    /**
     * @group 100A
     * @dataProvider DataA
     *
     * @param $expected
     * @param $a
     * @param $b
     */
    public function testA($expected, $a, $b)
    {
        $sample = new Sample();
        $result = $sample->solveA($a, $b);
        $this->assertSame($expected, $result);
    }

    /**
     * @return Generator
     */
    public function DataA()
    {
        // yield "0" => ["出力", "入力1", "入力2"];
        yield "1" => [7, "at", "coder"];
        yield "2" => [11, "php", "language"];
    }

    /**
     * @group 100B
     * @dataProvider DataB
     *
     * @param $expected
     * @param $a
     * @param $b
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
    public function DataB()
    {
        yield "1" => [14, "at", "coder"];
    }
}
