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
    $this->assertEquals("d, f", self::$service->filter_parameters('reflection_in_php_dissecting_a_function_via_reflection_parameter_test_example'));
  }

}
