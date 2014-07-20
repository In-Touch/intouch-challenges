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

	var $str;
	var $compare;

	function __construct( $string ) {
		$this->str = explode(" ", $string);
		$this->compare = array_combine( range("a","z"), range("A","Z") );
	}

	function compare( $letter ) {
		return isset($this->compare[$letter]) ? $this->compare[$letter] : $letter;
	}

	function get() {
		return implode( " ", $this->str );
	}

	function to_upper() {

		foreach( $this->str as &$str )
		{
			$split = str_split($str);
			$split[0] = $this->compare($split[0]);
			$str = implode($split);
		}

		return $this->get();
	}

}

$sol = new Solution("in-touch insight systems inc. programming challenge number 2");

$string = $sol->to_upper();

RGK::tell($string);