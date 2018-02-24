<?php

namespace Code;

class ReversedSequence
{
    public function reverseSeq($n)
    {
        $list = [$n];

        while (--$n > 0)
            $list[] = $n;

        return $list;
    }
}