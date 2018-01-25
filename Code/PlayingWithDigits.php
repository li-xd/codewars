<?php

namespace Code;

class PlayingWithDigits
{
    public function digPow($n, $p)
    {
        $sum = 0;
        foreach (str_split($n) as $number) {
            $sum += pow($number, $p++);
        }

        $ret = intval($sum / $n);

        return $ret * $n == $sum ? $ret : -1;
    }
}
