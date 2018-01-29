<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Code;


class RoboScript1ImplementSyntaxHighLightingTest extends TestCase
{
    private static $service = null;

    public static function setUpBeforeClass()
    {
        self::$service = new Code\RoboScript1ImplementSyntaxHighLighting();
    }

    public function testDescriptionExamples() {
       // echo "Code without syntax highlighting: F3RF5LF7\r\n";
       // echo "Expected syntax highlighting: <span style=\"color: pink\">F</span><span style=\"color: orange\">3</span><span style=\"color: green\">R</span><span style=\"color: pink\">F</span><span style=\"color: orange\">5</span><span style=\"color: red\">L</span><span style=\"color: pink\">F</span><span style=\"color: orange\">7</span>\r\n";
       // echo "Your code with syntax highlighting: " . self::$service->highlight("F3RF5LF7") . "\r\n";
        $this->assertEquals("<span style=\"color: pink\">F</span><span style=\"color: orange\">3</span><span style=\"color: green\">R</span><span style=\"color: pink\">F</span><span style=\"color: orange\">5</span><span style=\"color: red\">L</span><span style=\"color: pink\">F</span><span style=\"color: orange\">7</span>", self::$service->highlight("F3RF5LF7"));
        // echo "Code without syntax highlighting: FFFR345F2LL\r\n";
        // echo "Expected syntax highlighting: <span style=\"color: pink\">FFF</span><span style=\"color: green\">R</span><span style=\"color: orange\">345</span><span style=\"color: pink\">F</span><span style=\"color: orange\">2</span><span style=\"color: red\">LL</span>\r\n";
        // echo "Your code with syntax highlighting: " . self::$service->highlight("FFFR345F2LL") . "\r\n";
        $this->assertEquals("<span style=\"color: pink\">FFF</span><span style=\"color: green\">R</span><span style=\"color: orange\">345</span><span style=\"color: pink\">F</span><span style=\"color: orange\">2</span><span style=\"color: red\">LL</span>", self::$service->highlight("FFFR345F2LL"));
       }

}