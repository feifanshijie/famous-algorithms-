<?php
/**
 * 选择排序
 */
$array = [5,1,4,6,2,10,3,7,8,9];
$count = count($array);
$result = [];

function run(&$array)
{
    $k = $array[0];
    for ($i=0;$i<count($array);$i++)
    {
        if($k < $array[$i+1])
        {
            $k = $array[$i+1];
        }
    }

    return $k;
}

for ($i=0;$i < $count;$i++)
{
    $res = run($array);
    $result[$i] = $res;
    for ($j=0,$l=count($array);$j<$l;$j++)
    {
        if($array[$j] == $res)
        {
            array_splice($array,$j,1);
        }
    }
}

var_dump($result);
