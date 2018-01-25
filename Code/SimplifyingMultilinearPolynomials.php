<?php
namespace Code;

class SimplifyingMultilinearPolynomials
{
    public function simplify($poly)
    {
        // 表达式中只存在 + - 两种形式
        // 拆出 + 部分
        $handleList = explode('+', $poly);
         
        // 首先将 表达式打散 [表达式] => ['数量']
        $calList = [];
         
        // 以 - 方式拆分
        foreach ($handleList as $handleItem) {
            $handleItem = explode('-', $handleItem);
            // 为正数 flag
            $flag = false;
            
            foreach ($handleItem as $item) {
                $item = trim($item);
                
                if (!$item) {
                    $flag = true;
                    continue;
                }
                
                $matches = [];
                
                $is = preg_match('/[0-9]\d*/', $item, $matches);
                
                $number =  $is ? $matches[0] : 1;
                $expression = $is ? substr($item, strlen($number)) : $item;
                
                $number *= $flag ? -1 : 1;
                $expression = str_split($expression);
                sort($expression);
                $expression = implode('', $expression);
                
                $calList[strlen($expression)][$expression] = isset($calList[strlen($expression)][$expression]) ? $calList[strlen($expression)][$expression] + $number : $number;
                $flag = true;
            }
        }
         
        $result = '';
        ksort($calList);
        
        foreach ($calList as $index => $cal) {
            ksort($cal);
            
            foreach ($cal as $itemIndex => $value) {
                if (!$value || $value == -0) {
                    continue;
                }
                    
                if ($value > 0 && $result) {
                    $result .= '+';
                }
                    
                if ($value == 1) {
                    $result .= $itemIndex;
                } elseif ($value == -1) {
                    $result .= '-'.$itemIndex;
                } else {
                    $result .= $value . $itemIndex;
                }
            }
        }
        
        return $result;
    }
}
