<?php

namespace Tests;

use Code;
use PHPUnit\Framework\TestCase;

class RectangleIntoSquaresTest extends TestCase
{
    private static $service = null;

    public static function setUpBeforeClass()
    {
        self::$service = new Code\RectangleIntoSquares;
    }

    private function revTest($actual, $expected)
    {
        $this->assertEquals($expected, $actual);
    }

    public function testBasics()
    {
        $this->revTest(self::$service->sqInRect(5, 5), null);
        $this->revTest(self::$service->sqInRect(5, 3), [3, 2, 1, 1]);
        $this->revTest(self::$service->sqInRect(3, 5), [3, 2, 1, 1]);
        $this->revTest(self::$service->sqInRect(20, 14), [14, 6, 6, 2, 2, 2]);
    }
}
