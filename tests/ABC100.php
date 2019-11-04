<?php

use PHPUnit\Framework\TestCase;

/**
 * Class ABC100
 */
class ABC100 extends TestCase
{
    /**
     * @group 100B
     * @dataProvider DataA
     *
     * @param $expected
     * @param $a
     * @param $b
     */
    public function testB($expected, $a, $b)
    {
        $result = $this->solveA($a, $b);
        $this->assertSame($expected, $result);
    }

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
        $result = $this->solveA($a, $b);
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
     * 提出するロジック
     *
     * @param $a
     * @param $b
     * @return int
     */
    private function solveA($a, $b)
    {
        return strlen($a . $b);
    }
}
