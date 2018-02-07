<?php
namespace Code;

class PascalsTriangle
{
    function pascalsTriangle($n)
    {
        $result = [1];
        $lastList = [1];

        for ($i = 1; $i < $n; ++$i) {
            $lastCount = count($lastList);
            $currentList = [$lastList[0]];

            for ($j = 0; $j < $lastCount - 1; ++$j)
                $currentList[] = $lastList[$j] + $lastList[$j + 1];


            $currentList[] = end($lastList);
            $result = array_merge($result, $currentList);
            $lastList = $currentList;
        }

        return $result;
    }
}