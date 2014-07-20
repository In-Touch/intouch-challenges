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

	var $iv, $mode, $cipher, $failures, $base_key;

	function __construct( $cipher, $iv ) {

		switch( $cipher )
		{
			default:
			case 'AES-256-CBC':
				$this->mode = MCRYPT_MODE_CBC;
				$this->cipher = MCRYPT_RIJNDAEL_128;
				break;
		}

		$this->used = array();
		$this->base_key = [chr(0xBA)];
		$this->iv = base64_decode($iv);
	}

	function generate_key( $teeth ) {

		return implode(array_pad($teeth,32,chr(0)));
	}

	function random_attack_pair() {

		$attack = [chr(rand(0,255)), chr(rand(0,255))];
		return $this->used_check($attack) ? $attack : $this->random_attack_pair();
	}

	function brute_force( $secrets ) {

		$c = 0;

		while( $c < 1 /*(256*256) */ )
		{
			$attack = $this->random_attack_pair();
			$key = $this->generate_key( array_merge($this->base_key, $attack) );

			if( ($string = mcrypt_decrypt($this->cipher, $key, $secrets, $this->mode, $this->iv)) && preg_match('/^\x00-\x7F/',$string) )
			{
				$this->used_record( $attack ); //not so much failed as 'used';
				$output = array(
					'Output' => rtrim($string,"\0\4"),
					'Pass' => $attack
				);
				RGK::tell( $string.'<br />' );
				//break;
				++$c;
			}
			else
			{
				$this->used_record( $attack );
			}
		}
		return false;
	}

	function used_check( $attack ) {
		return !isset( $this->used[implode($attack)] );
	}

	function used_record( $attack ) {
		$this->used[implode($attack)] = true;
	}

}

$sol = new Solution("AES-256-CBC", "wfQWvRpD/bjkdLBQVCFyGg==");
$solved = $sol->brute_force("U45PXdltSdze1oC9OhxWtYybClZeNLd/MZ1LsC+CRTc=");

RGK::tell( $solved );
