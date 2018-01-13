<?php

namespace Tests;
use PHPUnit\Framework\TestCase;
use Code;

class ValidBracesTest extends TestCase {
  private static $service = null;
 
  static function setUpBeforeClass()
  { 
    self::$service = new Code\ValidBraces();
  }
    
  public function testSamples() {
      $this->assertEquals(true, self::$service->validBraces("()"));
      $this->assertEquals(false, self::$service->validBraces("[(])"));
    }
}