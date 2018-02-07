<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use Code\WhereMyAnagramsAt;

class WhereMyAnagramsAtTest extends TestCase
{
    private static $service = null;

    public static function setUpBeforeClass()
    {
        self::$service = new WhereMyAnagramsAt();
    }

    public function testExamples()
    {
        $this->assertEquals(['a'], self::$service->anagrams('a', ['a', 'b', 'c', 'd']));
        $this->assertEquals(['carer', 'arcre', 'carre'], self::$service->anagrams('racer', ['carer', 'arcre', 'carre', 'racrs', 'racers', 'arceer', 'raccer', 'carrer', 'cerarr']));
        $this->assertEquals(['aabb', 'bbaa'], self::$service->anagrams('abba', ['aabb', 'abcd', 'bbaa', 'dada']), 'Your function should work for an example provided in the Kata Description');
        $this->assertEquals(['carer', 'racer'], self::$service->anagrams('racer', ['crazer', 'carer', 'racar', 'caers', 'racer']), 'Your function should work for an example provided in the Kata Description');
        $this->assertEquals([], self::$service->anagrams('laser', ['lazing', 'lazy', 'lacer']), 'Your function should work for an example provided in the Kata Description');
    }
}