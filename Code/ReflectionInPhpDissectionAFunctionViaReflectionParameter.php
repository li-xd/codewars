<?php
namespace Code;

class ReflectionInPhpDissectionAFunctionViaReflectionParameter {
    function filter_parameters($fn) {
        $function = new \ReflectionFunction($fn);
        $parameterList = $function->getParameters();
  
        $resultList = [];
  
        foreach ($parameterList as $parameter) {
            if (!$parameter->hasType() || !$parameter->isDefaultValueAvailable()) 
                continue;
    
    
            $default = $parameter->getDefaultValue();
            if (is_int($default) && $default === 5) {
                $resultList[] = $parameter->getName();
            }
        }
  
        return implode(', ', $resultList);
    }
}

