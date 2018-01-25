<?php
namespace Code;

class BreakingChocolateProblem
{
    public function breakChocolate($n, $m)
    {
        if ($n < 1 || $m < 1) {
            return 0;
        }
    
        return ($n - 1) + ($n) * ($m - 1);
    }
}
