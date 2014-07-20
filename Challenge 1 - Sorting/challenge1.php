<?php

class RGK {

	public static function tell( $err = array() ) {

		if( !is_string($err) )
		{
			$err = print_r($err,true);
		}

		echo "<pre>$err</pre>";
	}

}

class Solution {

	var $list;
	var $sorted;

	function __construct( $range = 100 ) {

		$this->list = [];

		for( $i = 0; $i < $range; ++$i )
		{
			$this->list[] = rand(1,99);
		}
	}

	function sort_list( $asc = true ) {

		$this->sorted = [];
		while( count($this->list) > 0 )
		{
			$q = $asc ? min($this->list) : max($this->list);
			$k = array_search( $q, $this->list );
			$this->sorted[] = $this->list[$k];
			unset( $this->list[$k] );
		}

		return implode( ", ", $this->sorted );
	}

	function sort() {
		return $this->sort_list();
	}

	function rsort() {
		return $this->sort_list(false);
	}
}

$sol = new Solution();
$sorted = $sol->sort();

RGK::tell( $sorted );