<?php

namespace Code;

class ValidBraces {
    public function validBraces($braces) {
        $braceList = ["(" => ")", "[" => "]", "{" => "}"];
        $tempList = [];
        
        //首先 遍历字符串元素
        $length = strlen($braces);
        for ($i = 0; $i < $length; ++$i) {
            $brace = $braces[$i];
            
            if (in_array($brace, array_keys($braceList))) 
                $tempList[] = $brace;
            else {
                if (!count($tempList) || $braceList[array_pop($tempList)] != $brace)   
                    return false;
            }
        }
        
        if (count($tempList))
            return false;
            
        return true;
    }
}
