<?php
/*
All Code by Dave McGregor

This is obviously not complete. I would enjoy learning how to do this, as I've never atempted cryptography before. :)
*/



	$td = mcrypt_module_open(MCRYPT_RIJNDAEL_256, '', MCRYPT_MODE_CBC, '');
	$iv = "wfQWvRpD/bjkdLBQVCFyGg==";
    $key = "18600000000000000000000000000000";
    $encrypted_text = "U45PXdltSdze1oC9OhxWtYybClZeNLd/MZ1LsC+CRTc=";

    

    $iv = base64_decode($iv);
    $key = base64_decode($key);
    mcrypt_generic_init($td, $key, $iv);
    $encrypted_text = base64_decode($encrypted_text);

	//$decrypted = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, $encrypted_text, MCRYPT_MODE_CBC, $iv);
	$decrypted = mdecrypt_generic($td, $encrypted_text);

	mcrypt_generic_deinit($td);
    mcrypt_module_close($td);

    echo $decrypted;
    /*
    //$iv = mcrypt_create_iv($iv_size, "wfQWvRpD/bjkdLBQVCFyGg==");
    
    //$key = 0xBA;
    $plaintext = "iphone";
    //$ciphertext = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $plaintext, MCRYPT_MODE_ECB, $iv);
    $ciphertext = "U45PXdltSdze1oC9OhxWtYybClZeNLd/MZ1LsC+CRTc=";
    //
    //
    echo "ciphertext: ".$ciphertext."\n";
    $ciphertext = base64_decode($ciphertext);
    //$ciphertext = base64_encode($ciphertext);
    
    
    echo "plaintext: ".$plaintext."\n";

    $td = mcrypt_module_open(MCRYPT_RIJNDAEL_192, '', MCRYPT_MODE_CBC, '');
  mcrypt_generic_init($td, $key, $iv);
  
  
  return trim($decrypted);
	*/
    
?>

