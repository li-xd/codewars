<?php

namespace Tests;

use Code;
use PHPUnit\Framework\TestCase;

class BreakingChocolateProblemTest extends TestCase {
  private static $service = null;
 
  static function setUpBeforeClass()
  { 
    self::$service = new Code\BreakingChocolateProblem();
  }
    
  public function testSimpleExamples() {
    $this->assertEquals(self::$service->breakChocolate(5, 5), 24);
    $this->assertEquals(self::$service->breakChocolate(1, 1), 0);
  }
}