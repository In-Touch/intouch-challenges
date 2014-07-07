#!/usr/bin/php
<?php

function bubble_sort($arr) {
    $size = count($arr);
    for ($i=0; $i<$size; $i++) {
        for ($j=0; $j<$size-1-$i; $j++) {
            if ($arr[$j+1] < $arr[$j]) {
                swap($arr, $j, $j+1);
            }
        }
    }
    return $arr;
}

function swap(&$arr, $a, $b) {
    $tmp = $arr[$a];
    $arr[$a] = $arr[$b];
    $arr[$b] = $tmp;
}

/* test bubble sort */

$arr = array_fill(0,100,0);

for($i=0; $i<100; $i++){
        $arr[$i] = rand(1,99);
}

print("Before sorting\n");
print_r($arr);

$arr = bubble_sort($arr);
print("After sorting by using bubble sort\n");
print_r($arr);

?>

