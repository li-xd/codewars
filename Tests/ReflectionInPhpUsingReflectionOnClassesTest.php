<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use Code;

class ReflectionInPhpUsingReflectionOnClassesTest extends TestCase {
    
    private static $service = null;
 
    static function setUpBeforeClass()
    { 
      self::$service = new Code\ReflectionInPhpUsingReflectionOnClasses();
    }
  
    public function testDescriptionExample() {
      $this->assertEquals([
        "properties" => [
        "public" => 2,
        "protected" => 0,
        "private" => 1
      ],
      "methods" => [
        "public" => 1,
        "protected" => 2,
        "private" => 0
      ]
    ], self::$service->get_class_overview('Tests\Example'));
  }

}

class Example {
  public $a = 1;
  public $b;
  private $c = "Hello World";
  public function d() {}
  protected function e() {}
  protected function f() {}
}