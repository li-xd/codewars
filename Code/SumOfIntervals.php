<?php

namespace Code;

class SumOfIntervals
{
    function sumIntervals(array $intervals) : int
    {
        $list = [];

        foreach($intervals as $interval) {
            list($min, $max) = $interval;

            while ($max > $min) {
                $list[$min++] = 1;
            }
        }

        return array_sum($list);
    }
}