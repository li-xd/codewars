<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use Code;

class MultiplyStringTest extends TestCase {
    
  private static $service = null;
 
  static function setUpBeforeClass()
  { 
    self::$service = new Code\MultiplyStrings();
  }
    
  public function testSimpleExamples() {
    $this->assertEquals("6", self::$service->multiply("2", "3"));
    $this->assertEquals("2070", self::$service->multiply("30", "69"));
    $this->assertEquals("935", self::$service->multiply("11", "85"));
  }
  public function testCornerExamples() {
    $this->assertEquals("0", self::$service->multiply("2", "0"));
    $this->assertEquals("0", self::$service->multiply("0", "30"));
    $this->assertEquals("3", self::$service->multiply("0000001", "3"));
    $this->assertEquals("3027", self::$service->multiply("1009", "03"));
  }
  public function testBigExamples() {
    $this->assertEquals("5619135910", self::$service->multiply("98765", "56894"));
    $this->assertEquals("2830869077153280552556547081187254342445169156730", self::$service->multiply("1020303004875647366210", "2774537626200857473632627613"));
    $this->assertEquals("444625839871840560024489175424316205566214109298", self::$service->multiply("58608473622772837728372827", "7586374672263726736374"));
    $this->assertEquals("81129638414606663681390495662081", self::$service->multiply("9007199254740991", "9007199254740991"));
  }
}