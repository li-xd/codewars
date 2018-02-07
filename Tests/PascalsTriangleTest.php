<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use Code;

class PascalsTriangleTest extends TestCase
{
    private static $service = null;

    public static function setUpBeforeClass()
    {
        self::$service = new Code\PascalsTriangle();
    }

    public function testExamples()
    {
        $this->assertEquals([1], self::$service->pascalsTriangle(1));
        $this->assertEquals([1, 1, 1], self::$service->pascalsTriangle(2));
        $this->assertEquals([1, 1, 1, 1, 2, 1], self::$service->pascalsTriangle(3));
        $this->assertEquals([1, 1, 1, 1, 2, 1, 1, 3, 3, 1], self::$service->pascalsTriangle(4));
        $this->assertEquals([1, 1, 1, 1, 2, 1, 1, 3, 3, 1, 1, 4, 6, 4, 1], self::$service->pascalsTriangle(5));
    }
}