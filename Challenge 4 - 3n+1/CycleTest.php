<?php
include_once('cycle.php');

class CycleTest extends PHPUnit_Framework_TestCase
{
    public function testNextNumber()
    {
        $cycle = new Cycle;
        $this->assertEquals(4, $cycle->nextNumberAfter(8));
        $this->assertEquals(16, $cycle->nextNumberAfter(5));
        $this->assertEquals(1, $cycle->nextNumberAfter(2));
        $this->assertEquals(4, $cycle->nextNumberAfter(1));
    }

    public function testCycleGeneration()
    {
        $cycle = new Cycle;
        $this->assertEquals(array(22, 11, 34, 17, 52, 26, 13, 40, 20, 10, 5, 16, 8, 4, 2, 1), $cycle->generateCycle(22));
    }

    public function testCycleLength()
    {
        $cycle = new Cycle;
        $this->assertEquals(1, $cycle->findCycleLength(1));
        $this->assertEquals(2, $cycle->findCycleLength(2));
        $this->assertEquals(16, $cycle->findCycleLength(22));
    }

    public function testMaxCycleLength()
    {
        $cycle = new Cycle;
        $this->assertEquals(array(array(1), 1), $cycle->findMaxCycleLengthBetween(1, 1));
        $this->assertEquals(array(array(9), 20), $cycle->findMaxCycleLengthBetween(16, 1));
        $this->assertEquals(array(array(18, 19), 21), $cycle->findMaxCycleLengthBetween(1, 22));
        $this->assertEquals(array(array(999999), 259), $cycle->findMaxCycleLengthBetween(999999, 1000000));
    }
}
?>

