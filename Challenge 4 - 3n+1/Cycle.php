<?php

class Cycle
{
  private $cycle_length_map = array();

  public function findMaxCycleLengthBetween($a, $b) {
    $max_cycle  = array(array(0), 0);
    $i = min($a, $b);
    $j = max($a, $b);
    while($i <= $j) {
      $length = $this->findCycleLength($i);
      $current_max_length = $max_cycle[1];
      if ($current_max_length < $length) {
        $max_cycle = array(array($i), $length);
      } elseif ($current_max_length == $length) {
        array_push($max_cycle[0], $i);
      }
      $i++;
    }
    return $max_cycle;
  }

  public function findCycleLength($n)
  {
    if ($n == 1) {
      $this->cycle_length_map[$n] = 1;
    }
    if (!isset($this->cycle_length_map[$n])) {
      $length = 1 + $this->findCycleLength($this->nextNumberAfter($n));
      $this->cycle_length_map[$n] = $length;
    }
    return $this->cycle_length_map[$n];
  }

  public function generateCycle($n)
  {
    $cycle_array = array();
    array_push($cycle_array, $n);

    $count = 0;

    $i = $n;
    while($i != 1) {
      $next = $this->nextNumberAfter($i);
      array_push($cycle_array, $next);
      $i = $next;

      $count++;
    }
    return $cycle_array;
  }

  public function nextNumberAfter($n)
  {
    if ($n%2 == 0) {
      return $n/2;
    } else {
      return (3 * $n) + 1;
    }
  }

}


?>
