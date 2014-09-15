<?php
include 'cycle.php';

function check_within_bounds($input) {
  return ($input <= 0) || ($input > 1000000);
}

$i = intval($_GET['i']);
$j = intval($_GET['j']);

if (check_within_bounds($i) && check_within_bounds($i)) {
  echo "Inputs must be between 1 and 1000000";
} else {
  $cycle = new Cycle;
  $max_length_array = $cycle->findMaxCycleLengthBetween($i, $j);
  echo nl2br("Inputs: $i, $j");

  echo nl2br("\nNumber(s) with highest cycle length: ");
  echo implode(", ", $max_length_array[0]);

  echo nl2br("\nHighest cycle length: ");
  echo $max_length_array[1];


}

?>
