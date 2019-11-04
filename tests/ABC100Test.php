<?php

use PHPUnit\Framework\TestCase;

/**
 * Class ABC100
 */
class ABC100Test extends TestCase
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
        $result = $this->solveB($a, $b);
        $this->assertSame($expected, $result);
    }

    /**
     * @return Generator
     */
    public function DataB()
    {
        yield "1" => [14, "at", "coder"];
    }

    /**
     * 提出するロジック
     *
     * @param $a
     * @param $b
     * @return int
     */
    private function solveB($a, $b)
    {
        return strlen($a . $b) * 2;
    }
}
