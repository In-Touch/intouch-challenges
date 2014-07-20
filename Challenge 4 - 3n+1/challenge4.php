<?php

class RGK {

	public static function tell( $err = array(), $end = false ) {

		if( !is_string($err) )
		{
			$err = print_r($err,true);
		}

		echo "<pre>$err</pre>";
		if( $end )
		{
			die();
		}
	}

}

class Solution {

	var $scratch;

	function even( $n ) {
		return (($n % 2) === 0);
	}

	function note( $notes, $c ) {

		$notes = array_reverse($notes);
		foreach( $notes as $n )
		{
			$this->scratch[$n] = ++$c;
		}
	}

	function reduce( $n ) {

		$cycles = [$n];
		$min_cycle = 0;

		if( !isset($this->scratch[$n]) ) // Got lucky!
		{
			while( $n > 1 )
			{
				$n = $this->even($n) ? ($n / 2) : ($n*3) + 1;

				if( isset($this->scratch[$n]) )
				{
					$min_cycle = $this->scratch[$n];
					break;
				}
				else
				{
					$cycles[] = $n;
				}
			}

			$this->note( $cycles, $min_cycle );
		}

		return $this->scratch[reset($cycles)];
	}

	function run( $i, $j ) {

		if( $j < $i ) // In case of silliness, break glass
		{
			$t = $j;
			$j = $i;
			$i = $t;
		}

		$this->scratch = [];
		$this->cycles = array_fill_keys(range($i,$j), 0);
		foreach( $this->cycles as $n => &$c )
		{
			$c = $this->reduce($n);
		}
		$max = max($this->cycles);
		$n = array_search($max, $this->cycles);

		return compact( 'i', 'j', 'n', 'max' );

	}

}

$sol = new Solution();

$solved = $sol->run(200, 4000);

RGK::tell( $solved );