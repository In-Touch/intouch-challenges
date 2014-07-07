#!/usr/bin/php
<?php

$i = 1;
$j = 1000000;
$max = 0;

for ($k = $i; $k <= $j; $k++) {
  $current_max = do_stuff($k);
  if ($current_max > $max) {
    $max = $current_max;
    $max_n = $k;
  }
}

echo '$i: ' . $i . "\n";
echo '$j: ' . $j . "\n";
echo 'highest $n: ' . $max_n . "\n";
echo 'max cycle length: ' . $max . "\n";

function do_stuff($n) {
  if ($n == 1) {
    return 1;
  }

  if ($n % 2 == 0) {
    return do_stuff($n/2) + 1;
  } else {
    return do_stuff($n*3 + 1) + 1;
  }
}

?>
