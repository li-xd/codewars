<?php
namespace Code;

class LandPerimeter
{
    function landPerimeter(array $arr)
    {
        $count = 0;
        $lenX = count($arr);

        for ($i = 0; $i < $lenX; ++$i) {
            $lenY = strlen($arr[$i]);

            for ($j = 0; $j < $lenY; ++$j)
                $count += $this->backItemPerimeter($i, $j, $arr, $lenX, $lenY);

        }

        return 'Total land perimeter: ' . $count;
    }

    private function backItemPerimeter(int $x, int $y, array &$arr, int $lenX, int $lenY) : int
    {
        $count = 4;

        if ($arr[$x][$y] == 'O') return 0;

        foreach ([[0, 1], [1, 0], [0, -1], [-1, 0]] as $pos) {
            list($posX, $posY) = $pos;

            $posX_ = $x + $posX;
            $posY_ = $y + $posY;

            if ($posX_ >= 0 && $posX_ < $lenX && $posY_ >= 0 && $posY_ < $lenY && $arr[$posX_][$posY_] == 'X')
                $count--;
        }

        return $count;
    }
}