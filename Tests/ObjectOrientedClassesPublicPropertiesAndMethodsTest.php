<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use Code;

class ObjectOrientedClassesPublicPropertiesAndMethodsTest extends TestCase
{
    public function testThatPresidentClassExists()
    {
        $this->assertTrue(class_exists('Code\ObjectOrientedClassesPublicPropertiesAndMethods'));
    }
  
    public function testThatUSPresidentIsInstanceOfPresidentClass()
    {
        global $object_oriented_classes_public_properties_and_methods;
        $this->assertInstanceOf('Code\ObjectOrientedClassesPublicPropertiesAndMethods', $object_oriented_classes_public_properties_and_methods);
    }
}
