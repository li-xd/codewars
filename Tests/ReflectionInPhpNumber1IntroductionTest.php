<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use Code;

class ReflectionInPhpNumber1IntroductionTest extends TestCase {
    
  private static $service = null;
 
  static function setUpBeforeClass()
  { 
    self::$service = new Code\ReflectionInPhpNumber1Introduction();
  }
  
  public function testDescriptionExample() {
    $this->assertEquals([2, 2, false, false, false, true], self::$service->getInfo('multiply'));
  }

}

function multiply($a, $b) {
    return $a * $b;
}