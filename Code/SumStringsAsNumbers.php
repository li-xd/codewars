<?php
namespace Code;

class SumStringsAsNumbers
{
    public function sumStrings(string $a, string $b) : string
    {
        $a = strrev($a);
        $b = strrev($b);

        // 最大值 和 最小值 获取
        $max = max(strlen($a), strlen($b));

        $list = [];

        // 计算 和
        for ($i = 0; $i < $max; ++$i) {
            $item = ($a[$i] ?? 0) + ($b[$i] ?? 0) + ($list[$i] ?? 0);

            $list[$i] = $item % 10;
            if ($item > 9)
                $list[$i + 1] = 1;
        }
        return ltrim(implode('', array_reverse($list)), 0);
    }
}
