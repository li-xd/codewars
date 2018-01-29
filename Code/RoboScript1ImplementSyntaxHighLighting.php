<?php

namespace Code;

class RoboScript1ImplementSyntaxHighLighting
{
    public function highlight(string $code) : string
    {
        $codeList = str_split($code);
        $list = [];
        $result = [];

        foreach ($codeList as $item) {
            if (!count($list)) {
                $list[] = $item;
                continue;
            }
            $pop = $list[0];
            $this->handleLighting($result, $item, $list, $pop);

            $list[] = $item;
        }

        if (count($list)) {
            $this->handleLighting($result, null, $list, $list[0]);
        }

        return implode('', $result);
    }

    private function handleLighting(array &$result, $item, array &$list, $pop) {
        switch ($pop) {
            case 'F':
                $item != 'F' && ($result[] = '<span style="color: pink">'. implode('', $list) .'</span>') && $list = [];
                break;
            case 'L':
                $item != 'L' && ($result[] = '<span style="color: red">'. implode('', $list) .'</span>') && $list = [];
                break;
            case 'R':
                $item != 'R' && ($result[] = '<span style="color: green">'. implode('', $list) .'</span>') && $list = [];
                break;
            case '0':
            case '1':
            case '2':
            case '3':
            case '4':
            case '5':
            case '6':
            case '7':
            case '8':
            case '9':
                (!is_numeric($item)) && ($result[] = '<span style="color: orange">'. implode('', $list) .'</span>') && $list = [];
                break;
            case '(':
            case ')':
                ($result[] = $pop) && $list = [];
                break;
        }
    }
}