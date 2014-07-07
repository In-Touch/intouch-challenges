#!/usr/bin/php
<?php

$str = "in-touch insight systems inc. programming challenge number 2";
$arr = explode(" ", $str);

print("Before upper case\n");
print_r($arr);

$array_size = count($arr);

for($i=0;$i<$array_size;$i++){
        if(ord($arr[$i][0]) >=97 && ord($arr[$i][0]) <=122){
                $arr[$i][0] = chr(ord($arr[$i][0])-32);
        }
}

print("After upper case\n");
print_r($arr);

?>

