<?php
/*
All code written by Dave McGregor
*/

$numbers = array ();
$index = 0;
$least = 0;
$temp = 0;
for($i = 0; $i < 100; $i ++) {
	$numbers [$index] = rand ( 1, 99 );
	$index ++;
}
$least = $numbers [0];
for($j = 0; $j < 100; $j ++) {
	for($k = 0; $k < 99; $k ++) {
		if ($numbers [$k] > $numbers [$k + 1]) {
			$temp = $numbers [$k];
			$numbers [$k] = $numbers [$k + 1];
			$numbers [$k + 1] = $temp;
		}
	}
}
foreach ( $numbers as $value ) {
	print $value . " , ";
}

?>