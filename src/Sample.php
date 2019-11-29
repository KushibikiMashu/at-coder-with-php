<?php

namespace AtCoder;

/**
 * Class Sample
 * @package src
 */
class Sample
{
    /**
     * 提出するロジック
     *
     * @param $a
     * @param $b
     * @return int
     */
    public function solveA($a, $b)
    {
        return strlen($a . $b);
    }

    /**
     * 提出するロジック
     *
     * @param $a
     * @param $b
     * @return int
     */
    public function solveB($a, $b)
    {
        return strlen($a . $b) * 2;
    }
}