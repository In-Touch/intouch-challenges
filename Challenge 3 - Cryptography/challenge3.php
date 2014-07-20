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
			//...
		}

		$this->failed = array();
		$this->base_key = [chr(0xBA)];
		$this->iv = base64_decode($iv);
	}

	function generate_key( $teeth ) {

		return implode(array_pad($teeth,32,chr(0)));
	}

	function random_attack_pair() {

		$attack = [chr(rand(0,255)), chr(rand(0,255))];
		return $this->failed_check($attack) ? $attack : $this->random_attack_pair();
	}

	function brute_force( $secrets ) {

		$c = 0;

		while( true )
		{
			$attack = $this->random_attack_pair();
			$key = $this->generate_key( array_merge($this->base_key, $attack) );

			if( ($string = mcrypt_decrypt($this->cipher, $key, base64_decode($secrets), $this->mode, $this->iv)) && mb_detect_encoding($string, 'ASCII', true) )
			{
				return $output = array(
					'Output' => rtrim($string,"\0\4"),
					'Key' => bin2hex($key)
				);
				break;
			}
			else
			{
				$this->failed_record( $attack );
			}
		}
	}

	function failed_check( $attack ) {
		return !isset( $this->failed[implode($attack)] );
	}

	function failed_record( $attack ) {
		$this->failed[implode($attack)] = true;
	}

}

$sol = new Solution("AES-256-CBC", "wfQWvRpD/bjkdLBQVCFyGg==");
$solved = $sol->brute_force("U45PXdltSdze1oC9OhxWtYybClZeNLd/MZ1LsC+CRTc=");

RGK::tell( $solved );
