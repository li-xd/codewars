<?php
namespace Code;

class ReflectionInPhpNumber1Introduction {
    public function getInfo($fn) {
        $function = new \ReflectionFunction($fn);
        
        return [
            $function->getNumberOfParameters(),
            $function->getNumberOfRequiredParameters(),
            $function->hasReturnType(),
            $function->isClosure(),
            $function->isInternal(),
            $function->isUserDefined(),
        ];
    }
}

function multiply($a, $b) {
    return $a * $b;
}

