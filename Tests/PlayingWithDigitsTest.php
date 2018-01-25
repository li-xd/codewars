<?php

namespace Tests;

use Code;
use PHPUnit\Framework\TestCase;
use Code\PlayingWithDigits;

class PlayingWithDigitsTest extends TestCase
{
    private static $service = null;

    static function setUpBeforeClass()
    {
        self::$service = new Code\PlayingWithDigits();
    }

    private function revTest($actual, $expected)
    {
        $this->assertEquals($expected, $actual);
    }
    
    public function testBasics()
    {
        $this->revTest(self::$service->digPow(89, 1), 1);
        $this->revTest(self::$service->digPow(92, 1), -1);
        $this->revTest(self::$service->digPow(46288, 3), 51);
    }
}