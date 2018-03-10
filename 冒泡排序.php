<?php
/**
 * Name: 冒泡排序
 */
$array = [10,1,4,6,2,5,3,7,8,9];

for ($i = 0, $l = count($array);$i < $l;$i++)
{
    for($j = 0;$j < $l-$i-1;$j++)
    {
        if($array[$j] > $array[$j+1])
        {
            $temp        = $array[$j];
            $array[$j]   = $array[$j+1];
            $array[$j+1] = $temp;
        }
    }
    print_r($array);
}
