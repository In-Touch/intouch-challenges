<?php
/*
All code written by Dave McGregor
*/

	$otherString = "in-touch insight systems inc. programming challenge number 2";
	$string = str_split("in-touch insight systems inc. programming challenge number 2");
	$index = 0;
	$newString = "";
	foreach($string as $value)
	{
		if($index == 0)
		{
			$string[$index] = strtoupper($value);
			$index++;
		}
		else if($value == "-" || $value == " ")
		{
			if(! is_numeric($string[$index +1]))
			{
				$string[$index+1] = strtoupper($string[$index + 1]);
				$index++;
			}
			
		}
		else
		{
			
			$index++;
		}
		
	}
	echo $string = join($string);
?>
