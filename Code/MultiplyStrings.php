<?php
namespace Code;

class MultiplyStrings
{
    public function multiply(string $a, string $b): string
    {
        // 首先将 $b 和 $a 依照手算乘法 计算和
        $aLen = strlen($a);
        $bLen = strlen($b);
         
        // 总数列表
        $count = [];
         
        for ($i = 0; $i < $aLen; ++$i) {
            $indexI = $aLen - $i - 1;
            // 单个项 列表
            $item = [];
            for ($j = 0; $j < $bLen; ++$j) {
                $indexJ = $bLen - $j - 1;
                
                // 计算 单项 列表
                $item = $this->calItemAddition($item, $i + $j, $a[$indexI] * $b[$indexJ]);
            }
            $count = $this->calCountAddition($item, $count);
        }
         
        $count = implode('', array_reverse($count));
        
        return ltrim($count, '0') ?: '0';
        // 然后从最高位开始 去掉 0
    }
    
    private function calCountAddition(array &$itemList, array &$countList)
    {
        $maxLen = max(count($countList), count($itemList));
        // 将前面可能会用到的位数补全
        // 在 最大位 前加一位
        while (count($countList) < $maxLen + 1) {
            $countList[] = 0;
        }
        
        // 两个数组 做加法运算
        for ($i = 0; $i < $maxLen; ++$i) {
            $item = ($countList[$i] ?? 0) + ($itemList[$i] ?? 0);
            if ($item > 9) {
                $countList[$i] = $item % 10;
                $countList[$i + 1] += intval($item / 10);
            } else {
                $countList[$i] = $item;
            }
        }
        
        return $countList;
    }
    
    private function calItemAddition(array &$itemList, int $index, int $value)
    {
        // 将前面可能会用到的位数补全
        // 在 index 前加一位
        while (count($itemList) < $index + 1) {
            $itemList[] = 0;
        }
        
        // 计算 新生成的该位结果
        $value += $itemList[$index];
        
        // 如果 该位溢出 则将其 进位
        if ($value > 9) {
            $itemList[$index] = $value % 10;
            $itemList[$index + 1] = intval($value / 10);
        } else {
            $itemList[$index] = $value;
        }
        
        return $itemList;
    }
}
