<?php

namespace Tests;
use PHPUnit\Framework\TestCase;
use Code;

class SimplifyingMultilinearPolynomialsTest extends TestCase {
    private static $service = null;
 
    static function setUpBeforeClass()
    { 
      self::$service = new Code\SimplifyingMultilinearPolynomials();
    }
    
    // test function names should start with "test"
    public function test_reduction_by_equivalence()
    {
        $this->assertEquals('cd+abcd', self::$service->simplify('dc+dcba'));
        $this->assertEquals('xy', self::$service->simplify('2xy-yx'));
        $this->assertEquals('-c+5ab', self::$service->simplify('-a+5ab+3a-c-2a'));
    }

    public function test_monomial_length_ordering()
    {
        $this->assertEquals('3a+2ac-abc', self::$service->simplify('-abc+3a+2ac'));
        $this->assertEquals('-xz+xyz', self::$service->simplify('xyz-xz'));
    }

    public function test_lexicographic_ordering()
    {
        $this->assertEquals('a-ab+ac', self::$service->simplify('a+ca-ab'));
        $this->assertEquals('byz+xyz', self::$service->simplify('xzy+zby'));
    }

    public function test_no_leading_plus()
    {
        $this->assertEquals('x-y', self::$service->simplify('-y+x'));
        $this->assertEquals('-x+y', self::$service->simplify('y-x'));
    }
}