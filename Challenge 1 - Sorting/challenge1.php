<!DOCTYPE html>
<html>
  <head>
    <link type='text/css' rel='stylesheet' href='style.css'/>
    <title>In-Touch Programming Challenge #1 - Sorting</title>
  </head>
  <body>

      <div class="header"><h1>
      <?php
      $welcome = "In-Touch Programming Challenge #1 - Sorting";
      echo $welcome;
      ?>
    </h1></div>

	<div class="body">
      <?php

	  $challenge = "Generate a list of 100 random integers between 1 and 99.<br><br>
Write a program to sort this list, from lowest to highest, without using any of the following functions:<br><br>
sort, rsort, uasort, uksort, usort, ksort, krsort, asort, arsort, natsort, natcasesort, array_multisort";
	  echo "<h1>Challenge</h1>";
	  echo $challenge;
	  echo "<br />";
	  echo "<br />";
      ?>
    </div>
	
<?php	
define('small', 1);
define('large', 99);
define('first', 1);
define('last', 100);

$numbers=array();

foreach(range(first,last) as $i){
   $numbers[] = mt_rand(small,large);
}

echo "<h1>Response</h1>";
echo "Unsorted list is: ";
echo "<br />";
// print_r($numbers);
$withComma = implode(" ,", $numbers);
echo $withComma;

for($j = 0; $j < count($numbers); $j ++) {
    for($i = 0; $i < count($numbers)-1; $i ++){

        if($numbers[$i] > $numbers[$i+1]) {
            $temp = $numbers[$i+1];
            $numbers[$i+1]=$numbers[$i];
            $numbers[$i]=$temp;
        }       
    }
}

echo "<br />";
echo "<br />";
echo "Sorted list is: ";
echo "<br />";
// print_r($numbers);
$withComma = implode(" ,", $numbers);
echo $withComma;

?>
    </p>
  </body>
</html>
