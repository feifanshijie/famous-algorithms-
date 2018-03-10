<?php

/**
 * 桶排序(箱排序)
 */

$array = [10,1,4,6,2,5,3,3,8,9];
$max = 10;

$sort = function (array $array = [], $max = 0) {
    $temp_array = [];

    for ($i = 0; $i < $max + 1; $i++) {
        $temp_array[$i] = 0;
    }

    for ($i = 0; $i < count($array); $i++) {
        $temp_array[$array[$i]]++;
    }

    $result = [];
    for ($i = 0; $i < $max + 1; $i++)
    {
        for($j = 0;$j<$temp_array[$i];$j++)
        {
            $result[] = $i;
        }
    }
    return $result;
};

var_dump($sort($array, 15));
