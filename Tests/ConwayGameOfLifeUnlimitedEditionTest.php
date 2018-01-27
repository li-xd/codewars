<?php

namespace Tests;

use Code;
use PHPUnit\Framework\TestCase;

class ConwayGameOfLifeUnlimitedEditionTest extends TestCase
{
    private static $service = null;

    public static function setUpBeforeClass()
    {
        self::$service = new Code\ConwayGameOfLifeUnlimitedEdition();
    }

    public function testSimpleExamples()
    {
        $this->assertEquals(
            [
                [0, 1, 0],
                [0, 0, 1],
                [1, 1, 1]
            ],
            self::$service->getGeneration(
                [
                    [1, 0, 0],
                    [0, 1, 1],
                    [1, 1, 0]
                ],
                1
            )
        );
    }

    public function testSingleGlider()
    {
        $this->assertEquals(
            [
                [1, 0, 1],
                [0, 1, 1],
                [0, 1, 0]
            ],
            self::$service->getGeneration(
                [
                    [1, 0, 0],
                    [0, 1, 1],
                    [1, 1, 0]
                ],
                2
            )
        );
    }

    public function testSingleEdge()
    {
        $this->assertEquals(
            [
               []
            ],
            self::$service->getGeneration(
                [
                    [0, 0, 0, 0],
                    [0, 0, 0, 0],
                    [0, 0, 0, 0],
                    [0, 0, 0, 0],
                ],
                1
            )
        );
    }
}
