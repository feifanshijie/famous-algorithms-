<?php
/**
 * Name: 插入排序
 */
$array = [1,2,3,5,6,7,9,11,12,15];

function insertSort($array) {
    $len=count($array);
    for($i=1;$i<$len;$i++) {
        $tmp = $array[$i];
        for($j=$i-1;$j>=0;$j--) {
            if($tmp < $array[$j]) {
                $array[$j+1] = $array[$j];
                $array[$j] = $tmp;
            } else {
                break;
            }
        }
    }
    return $array;
}
var_dump(insertSort($array));