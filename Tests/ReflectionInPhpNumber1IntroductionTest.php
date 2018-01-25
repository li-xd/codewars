<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use Code;

class ReflectionInPhpNumber1IntroductionTest extends TestCase
{
    private static $service = null;
 
    public static function setUpBeforeClass()
    {
        self::$service = new Code\ReflectionInPhpNumber1Introduction();
    }
  
    public function testDescriptionExample()
    {
        $this->assertEquals([2, 2, false, false, false, true], self::$service->getInfo('reflection_in_php_number_1_introduction_test_multiply'));
    }
}
