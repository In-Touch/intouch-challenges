<?php

Class MakeSort{
    private $numbers = array();
    private $max;
    private $min;
    
    function __construct(int $min,int $max){
        $this->max = $max;
        $this->min = $min;
    }
    
    public function sortNumbers(){
        //Even though it's set to 100 numbers, count in case it changes later.
        $count = count($this->numbers);
        
        for($i = 0; $i < $count; $i++){
            for($j = 0;$j < $count-1; $j++){
                if($this->numbers[$j] > $this->numbers[$j+1]){
                    $k = $this->numbers[$j+1];
                    $this->numbers[$j+1] = $this->numbers[$j];
                    $this->numbers[$j] = $k;
                }
            }
        }
        
        return $this->numbers;
    }
    
    public function genNum(){
        for($i = 0; $i < 100; $i++){
            //this highlights why we don't use rand or mt_rand for true randomness.
            $this->numbers[] = rand($this->min,$this->max);
        }
        
        return $this->numbers;
    }
}
$class = new MakeSort(1,99);
print_r('Unsorted List:');
print_r($class->genNum());
print_r('Sorted Numbers:');
print_r($class->sortNumbers());

?>