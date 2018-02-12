<?php
namespace Code;

class NestingStructureComparison
{
    public function sameStructureAs(array $a, array $b) : bool
    {
        return $this->getType($a) == $this->getType($b);
    }

    private function getType(array $list)
    {
        $typeList = [];

        foreach ($list as $item) {
            if (is_array($item)) {
                $typeList[] = 'list';
                $typeList[] = $this->getType($item);
            } else 
                $typeList[] = 'item';
                
        }

        return $typeList;
    }
}