<?php
namespace Code;

class ReflectionInPhpUsingReflectionOnClasses {
    function get_class_overview($c) {
        $refectionClass = new \ReflectionClass($c);
   
        return [
            "properties" => [
                "public" => count($refectionClass->getProperties(\ReflectionProperty::IS_PUBLIC)),
                "protected" => count($refectionClass->getProperties(\ReflectionProperty::IS_PROTECTED)),
                "private" => count($refectionClass->getProperties(\ReflectionProperty::IS_PRIVATE)),
            ],
            "methods" => [
                "public" => count($refectionClass->getMethods(\ReflectionMethod::IS_PUBLIC)),
                "protected" => count($refectionClass->getMethods(\ReflectionMethod::IS_PROTECTED)),
                "private" => count($refectionClass->getMethods(\ReflectionMethod::IS_PRIVATE)),
            ]
        ];
    }
}

