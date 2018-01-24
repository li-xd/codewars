<?php

namespace Code;

class RectangleIntoSquares
{
    function sqInRect($lng, $wdth)
    {
        if ($lng == $wdth) return null;

        // 结果 list
        $list = [];

        while ($lng && $wdth) {
            // 获取最小的 边
            $min = min($lng, $wdth);
            
            // 将裁剪边 计入到 list 中
            $list[] = $min;

            if ($lng != $wdth)
                $lng != $min && $lng -= $min or $wdth != $min && $wdth -= $min;
            else
                $lng = $wdth = 0;
        }
        return $list;
    }
}