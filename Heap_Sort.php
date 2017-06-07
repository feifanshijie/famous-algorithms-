<?php
/**
 * Name: 二分法查找
 */
$array = [1,2,3,5,6,7,9,11,12,15];

function run($key, $array)
{
    $k = ceil(count($array)/2);
    $low = 0;
    $high = count($array)-1;
    while ($low <= $high)
    {
        if($array[$k] == $key)
        {
            return true;
        }
        if($array[$k] > $key)
        {
            $low = $k + 1;
        } else {
            $high = $k - 1;
        }
    }
    return false;
}

