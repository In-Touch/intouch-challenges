<?php

/*
All code written by Dave McGregor
*/


$hashMap = array(1000000); //eventually, a hashmap could be used to reduce time, as it could record each step previously taken and would avoid duplicate steps
function CalculateInputCycleLength($num)
{
  $currNum = $num;
  $cycleIndex = 1;
  
  while($currNum != 1)
  {
  
    if($currNum % 2 == 0) //an even number
    {
      $currNum = $currNum / 2;
      $cycleIndex++;
    }
    else // an odd number
      {
        $currNum = $currNum * 3 + 1;
        $cycleIndex++;
        
      }
    }
    return $cycleIndex;
      
}


function CalculateLongestCycle($min, $max)
{
  $currLongestCycle = 1;
  $tempCycle = 0;
  $highestCycle = 0;
  $originalMin = $min;
  $originalMax = $max;
  

  if($min > $max)
  {
    $temp = $max; 
    $max = $min; 
    $min = $temp;
  }

  for($i = $min; $i <= $max; $i++)
  {
    $tempCycle = CalculateInputCycleLength($i);
    if($tempCycle > $currLongestCycle)
    {
      $currLongestCycle = $tempCycle;
      $highestCycle = $i;
    }
  }
  
  echo "Input Numbers: " . $originalMin . " , " . $originalMax . "\n";
  echo "Longest Cycle Number \n";
  echo $highestCycle . "\n";
  echo "Longest Cycle Length \n";
  return $currLongestCycle;

}

echo "Running... \n";
echo CalculateLongestCycle(1, 1000000);
?>