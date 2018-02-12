<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Code\NestingStructureComparison;


class NestingStructureComparisonTest extends TestCase
{
    private static $service = null;

    public static function setUpBeforeClass()
    {
        self::$service = new NestingStructureComparison();
    }

    public function testDescriptionExamples()
    {
        $this->assertTrue(self::$service->sameStructureAs([1, 1, 1], [2, 2, 2]));
        $this->assertTrue(self::$service->sameStructureAs([1, [1, 1]], [2, [2, 2]]));
        $this->assertFalse(self::$service->sameStructureAs([1, [1, 1]], [[2, 2], 2]));
        $this->assertFalse(self::$service->sameStructureAs([1, [1, 1]], [[2], 2]));
        $this->assertTrue(self::$service->sameStructureAs([[[], []]], [[[], []]]));
        $this->assertFalse(self::$service->sameStructureAs([[[], []]], [[1, 1]]));
        $this->assertTrue(self::$service->sameStructureAs([1, '[', ']'], ['[', ']', 1]));
    }
}