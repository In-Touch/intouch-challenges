<!DOCTYPE html>
<html>
  <head>
    <link type='text/css' rel='stylesheet' href='style.css'/>
    <title>In-Touch Programming Challenge ##4 - 3n+1</title>
  </head>
  <body>

      <div class="header"><h1>
      <?php
      $welcome = "In-Touch Programming Challenge ##4 - 3n+1";
      echo $welcome;
      ?>
    </h1></div>
	
<div class="body">
      <?php

	  $challenge = "<p>Consider the following algorithm to generate a sequence of numbers:</p>

	  <p>Start with an integer &#36;n. If &#36;n is even, divide by 2. If &#36;n is odd, multiply by 3 and add 1. Repeat this process with the new value of &#36;n, terminating when &#36;n = 1. For example, the following sequence of numbers will be generated for &#36;n = 22:</p>

<pre>22 11 34 17 52 26 13 40 20 10 5 16 8 4 2 1
</pre>

<p>For an input &#36;n, the cycle-length of &#36;n is the number of numbers generated up to and including the 1. In the example above, the cycle length of 22 is 16. Given any two numbers &#36;i and &#36;j, you are to determine the maximum cycle length over all numbers between &#36;i and &#36;j, including both endpoints. Your program should output &#36;i, &#36;j, the number &#36;n that has the highest cycle length and what that maximum cycle length is.</p>

<p>The input numbers we will test with, &#36;i and &#36;j, will be positive integers between 1 and 1,000,000, inclusive.</p>";

	  echo "<h1>Challenge</h1>";
	  echo $challenge;
	  echo "<br />";
      ?>
    </div>
	
<?php
function CalculateCycleLength($n)
{
 $currentNumber = $n;
 $cycleCounter = 1;
 
 while ($currentNumber != 1)
 {
  $cycleCounter += 1;
  
  $remainder = $currentNumber % 2;
  
  if ($remainder == 0)
  {
   $currentNumber = $currentNumber / 2;
  }
  else
  {
   $currentNumber = $currentNumber * 3 + 1;
  }
 }
 
 return $cycleCounter;
}
function FindMaxCycle($i, $j)
{
 if ($i < $j)
 {
  $start = $i;
  $end = $j;
 }
 else
 {
  $start = $j;
  $end = $i;
 }
 for ($current = $start; $current <= $end; $current++)
 {
  $cycleLength = CalculateCycleLength($current);
  
  if ($current == $start)
  {
   $highestCycleLength = $cycleLength;
   $highestCycleNumber = $current;
  }
  else
  {
   if ($cycleLength > $highestCycleLength)
   {
    $highestCycleLength = $cycleLength;
    $highestCycleNumber = $current;
   }
  }
 }
 
 echo "<h1>Response</h1>";
 
 echo("<b>Starting Number: </b>");
 echo $i;
 echo("\n");
 echo("<b>Ending Number: </b>");
 echo $j;
 echo("\n");
 echo("<b>Highest Cycle Number: </b>");
 echo($highestCycleNumber);
 echo("\n");
 echo("<b>Highest Cycle Length: </b>");
 echo($highestCycleLength);
}
FindMaxCycle(1, 1000000);
?>
