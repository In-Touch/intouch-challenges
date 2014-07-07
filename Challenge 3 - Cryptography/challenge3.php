<!DOCTYPE html>
<html>
  <head>
    <link type='text/css' rel='stylesheet' href='style.css'/>
    <title>In-Touch Programming Challenge #3 - Cryptography</title>
  </head>
  <body>

      <div class="header"><h1>
      <?php
      $welcome = "In-Touch Programming Challenge #3 - Cryptography";
      echo $welcome;
      ?>
    </h1></div>
	
<div class="body">
      <?php

	  $challenge = "Write a PHP program to decode the given ciphertext, provide the output cleartext and the hexadecimal representation of the key that was used to encrypt.";
	  echo "<h1>Challenge</h1>";
	  echo $challenge;
	  echo "<br />";
	  echo "<br />";
      ?>
    </div>
	
<?php
echo "<h1>Response - work in progress</h1>";
// start of value definitions
echo "<br />";
echo "IV:";
echo "<br />";
$iv = 'wfQWvRpD/bjkdLBQVCFyGg==';
echo $iv;
echo "<br />base64_decode:<br />";
echo base64_decode($iv);
echo "<br />";
echo "<br />";
echo "CT:";
echo "<br />";
$ct = 'U45PXdltSdze1oC9OhxWtYybClZeNLd/MZ1LsC+CRTc=';
echo $ct;
echo "<br />base64_decode:<br />";
echo base64_decode($ct);

// start of decrypt function
// function decrypt($text, $pkey)
// {
//	$key = $pkey;   
//	$text = base64_decode($text); 
//	$IV = substr($text, strrpos($text, "-[--IV-[-") + 9);
//	$text = str_replace("-[--IV-[-".$IV, "", $text);
// 
//	return rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, $text, MCRYPT_MODE_CBC, $IV), "\0");
//}



?>

    </p>
  </body>
</html>
