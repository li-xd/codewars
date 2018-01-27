<?php

namespace Tests;
use Code;

use PHPUnit\Framework\TestCase;

class SumOfIntervalsTest extends TestCase
{
    private static $service = null;

    public static function setUpBeforeClass()
    {
        self::$service = new Code\SumOfIntervals;
    }

    public function testBasics()
    {
        // Non-overlapping intervals
    $this->assertEquals(4, self::$service->sumIntervals([[1, 5]]));
    $this->assertEquals(8, self::$service->sumIntervals([
      [1, 5],
      [6, 10]
    ]));
    
    // Overlapping intervals
    $this->assertEquals(4, self::$service->sumIntervals([
      [1, 5],
      [1, 5]
    ]));
    $this->assertEquals(7, self::$service->sumIntervals([
      [1, 4],
      [7, 10],
      [3, 5]
    ]));
    }
}