<?php

namespace Code;

class ConwayGameOfLifeUnlimitedEdition
{
    function getGeneration(array $cells, int $generations) : array
    {
        while ($generations--)
            $this->generation($cells);

        if ($cells === [])
            return [[]];

        return $cells;
    }

    private function generation(array &$cellList) : array
    {
        if (!$cellList) return [];

        $xMax = count($cellList) - 1;
        $yMax = count($cellList[0]) - 1;

        $list = [];

        // 对 边沿数据计算
        for ($i = -1; $i <= $xMax + 1; ++$i)
            for ($j = -1; $j <= $yMax + 1; ++$j)
            $list[$i + 1][$j + 1] = $this->judge($cellList, $i, $j, $xMax, $yMax);

        // 裁剪 横向 [从 上 到 下]
        for ($i = 0; $i <= $xMax + 2; ++$i)
            if (!array_sum($list[$i]))
            unset($list[$i]);
        else
            break;

        // 裁剪 横向 [从 下 到 上]
        for ($j = $xMax + 2; $j > $i; --$j)
            if (!array_sum($list[$j]))
            unset($list[$j]);
        else
            break;

        // 重新设置序列
        $list = array_values($list);

        $listLenX = count($list);
        // 裁剪 纵向 [从左到右]

        $listLenY = count($list[0] ?? []);
        for ($j = 0; $j < $listLenY; ++$j) {
            $count = 0;

            // 以列进行计算和
            for ($i = 0; $i < $listLenX; ++$i)
                $count += $list[$i][$j];

            // 如果有值 将所有序列后移
            if ($count)
                break;
        }
        // 从右向左开始 转移
        if ($j != 0) {

            // 迁移
            for ($i = 0; $i < $listLenY - $j; ++$i)
                for ($k = 0; $k < $listLenX; ++$k)
                    $list[$k][$i] = $list[$k][$i + $j];

            // 消除
            for ($i = $listLenY - $j; $i < $listLenY; ++$i)
                for ($k = 0; $k < $listLenX; ++$k)
                    unset($list[$k][$i]);
        }

        // 裁剪 纵向 [从 右向左]
        $listLenY = count($list[0] ?? []);
        for ($j = $listLenY - 1; $j >= 0; --$j) {
            $count = 0;

            // 以列进行计算和
            for ($i = 0; $i < $listLenX; ++$i)
                $count += $list[$i][$j];

            // 如果有值 将所有序列后移
            if ($count)
                break;
            else
                for ($i = 0; $i < $listLenX; ++$i)
                unset($list[$i][$j]);
        }


        return $cellList = $list;
    }

    private function judge(array &$cellList, int $x, int $y, int $maxX, int $maxY) : int
    {
        // 获取当前的值
        $target = $cellList[$x][$y] ?? 0;

        $countTrue = $this->accessToTheNeighbors($cellList, $x, $y, $maxX, $maxY);

        // 判断目标需要查看的路径
        if ($target) 
            // 为 其为生存路径

            // 少于两个活邻居 死亡
            // 大于三个活邻居 死亡
        ($countTrue == 2 or $countTrue == 3) or $target = 0;
        else 
        // 为 其为死亡路径
        // 正好有三个活邻居 重生
        $countTrue == 3 and $target = 1;

        return $target;
    }

    private function accessToTheNeighbors(array &$cellList, int $x, int $y, int $maxX, int $maxY) : int
    {
        // 获取 周边八个邻居的情况
        $xMin = $x - 1 < 0 ? 0 : $x - 1;
        $xMax = $x + 1 > $maxX ? $maxX : $x + 1;

        $yMin = $y - 1 < 0 ? 0 : $y - 1;
        $yMax = $y + 1 > $maxY ? $maxY : $y + 1;

        $count = 0;

        // 获取其 邻居 存活和死亡 cell 个数
        for ($i = $xMin; $i <= $xMax; ++$i)
            for ($j = $yMin; $j <= $yMax; ++$j) ($x == $i && $y == $j) or $count += $cellList[$i][$j];

        return $count;
    }
}