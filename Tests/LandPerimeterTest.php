<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use Code;


class LandPerimeterTest extends TestCase
{
    private static $service = null;

    public static function setUpBeforeClass()
    {
        self::$service = new Code\LandPerimeter();
    }

    public function testSimpleExamples()
    {
        $this->assertEquals("Total land perimeter: 60", self::$service->landPerimeter(["OXOOOX", "OXOXOO", "XXOOOX", "OXXXOO", "OOXOOX", "OXOOOO", "OOXOOX", "OOXOOO", "OXOOOO", "OXOOXX"]));
        $this->assertEquals("Total land perimeter: 52", self::$service->landPerimeter(["OXOOO", "OOXXX", "OXXOO", "XOOOO", "XOOOO", "XXXOO", "XOXOO", "OOOXO", "OXOOX", "XOOOO", "OOOXO"]));
        $this->assertEquals("Total land perimeter: 40", self::$service->landPerimeter(["XXXXXOOO", "OOXOOOOO", "OOOOOOXO", "XXXOOOXO", "OXOXXOOX"]));
        $this->assertEquals("Total land perimeter: 54", self::$service->landPerimeter(["XOOOXOO", "OXOOOOO", "XOXOXOO", "OXOXXOO", "OOOOOXX", "OOOXOXX", "XXXXOXO"]));
        $this->assertEquals("Total land perimeter: 40", self::$service->landPerimeter(["OOOOXO", "XOXOOX", "XXOXOX", "XOXOOO", "OOOOOO", "OOOXOO", "OOXXOO"]));
    }
}