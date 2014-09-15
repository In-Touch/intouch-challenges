<?php


class ArraySort
{
  public function sort(array $arr)
  {
    $n = sizeof($arr);
    for ($i = 0; $i < $n; $i++) {
      for ($j = $n-1; $j > $i; $j-- ) {
        if ($arr[$j-1] > $arr[$j]) {
          $arr = $this->swap($j-1, $j, $arr);
        }
      }
    }
    return $arr;
  }

  public function swap($i, $j, array $arr)
  {
    $tmp = $arr[$i];
    $arr[$i] = $arr[$j];
    $arr[$j] = $tmp;

    return $arr;
  }
}

$rand_arr = array();

for ($i = 0; $i < 100; $i++) {
    array_push($rand_arr, rand (1, 99));
}

echo nl2br("Original Array:\n");
print_r($rand_arr);

$sorter = new ArraySort;
echo nl2br("\n\nSorted Array:\n");
print_r($sorter->sort($rand_arr));

?>
