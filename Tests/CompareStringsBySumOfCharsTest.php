<?php
namespace Tests;

use Code;
use PHPUnit\Framework\TestCase;

class CompareStringsBySumOfCharsTest extends TestCase
{
    private static $service = null;
 
    public static function setUpBeforeClass()
    {
        self::$service = new Code\CompareStringsBySumOfChars();
    }
    
    public function testExample()
    {
        $this->assertSame(true, self::$service->compare("AD", "BC"));
        $this->assertSame(false, self::$service->compare("AD", "DD"));
        $this->assertSame(true, self::$service->compare("FG", "fg"));
        $this->assertSame(true, self::$service->compare("z11", ""));
        $this->assertSame(true, self::$service->compare("ZzZz", "ffPFF"));
        $this->assertSame(true, self::$service->compare(null, ""));
    }
}
