<?php
/**
 * Name: 快速排序
 */
$array = [5,1,4,6,2,10,3,7,8,9];

function run(&$array)
{
    if(count($array) > 1)
    {
        $array_count = count($array);
        $key   = $array[0];
        $left  = [];
        $right = [];
        for ($i=1;$i<$array_count;$i++)
        {
            if($key > $array[$i])
            {
                $left[] = $array[$i];
            }
            else if($key <= $array[$i])
            {
                $right[] = $array[$i];
            }
        }

        $left = run($left);
        $right = run($right);

        return array_merge($left,array($key),$right);
    }else{
        return $array;
    }
}
var_dump(run($array));
