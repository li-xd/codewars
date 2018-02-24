<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Code\ReversedSequence;

class ReversedSequenceTest extends TestCase
{
    static private $service = null;

    static public function setUpBeforeClass()
    {
        self::$service = new ReversedSequence;
    }

    public function testBasic()
    {
        $this->assertEquals(self::$service->reverseSeq(5), [5, 4, 3, 2, 1]);
        $this->assertEquals(self::$service->reverseSeq(1), [1]);
    }
}