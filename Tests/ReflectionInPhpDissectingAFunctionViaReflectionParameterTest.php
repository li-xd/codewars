<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use Code;

class ReflectionInPhpDissectingAFunctionViaReflectionParameterTest extends TestCase {
    
  private static $service = null;
 
  static function setUpBeforeClass()
  { 
    self::$service = new Code\ReflectionInPhpDissectionAFunctionViaReflectionParameter;
  }
  
  public function testDescriptionExample() {
    $this->assertEquals("d, f", self::$service->filter_parameters('example'));
  }

}

function example($a, int $b, bool $c, int $d = 5, float $e = 5.00, int $f = 5, int $g = 15) { /* ... */ }