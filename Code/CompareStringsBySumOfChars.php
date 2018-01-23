<?php
namespace Code;

class CompareStringsBySumOfChars {
    function compare($s1, $s2) {
        $s1 = strtoupper($s1);
        $s2 = strtoupper($s2);
        
        $s1_value = ($s1 && ctype_upper($s1)) ? $this->calStringASCII($s1) : 0;
        $s2_value = ($s2 && ctype_upper($s2)) ? $this->calStringASCII($s2) : 0;
        
        return $s1_value == $s2_value;
    }
    
    function calStringASCII($string) {
        return array_reduce(str_split($string), function($carry, $item) {
            return $carry + ord($item);
        });
    }
}