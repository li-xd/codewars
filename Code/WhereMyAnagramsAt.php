<?php
namespace Code;

class WhereMyAnagramsAt
{
    function anagrams(string $word, array $words) : array
    {
        $wordList = $this->arrayCount($word);
        $result = [];

        foreach ($words as $item) 
            $this->arrayCount($item) == $wordList && ($result[] = $item);
        
        return $result;
    }

    function arrayCount(string $string) : array
    {
        $string = str_split($string);

        $stringList = array_count_values($string);
        ksort($stringList);

        return $stringList;
    }
}