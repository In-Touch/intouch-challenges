#!/usr/bin/php
<?php


$data = base64_decode("U45PXdltSdze1oC9OhxWtYybClZeNLd/MZ1LsC+CRTc=");
$iv = base64_decode("wfQWvRpD/bjkdLBQVCFyGg==");

echo 'IV: ' . bin2hex($iv) . "\n";

for ($i = 0; $i <= 255; $i++) {
  for ($j = 0; $j <= 255; $j++) {
    $key = pack("C*", hexdec("BA"),$i,$j,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
    $result = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $data, MCRYPT_MODE_CBC, $iv);
    if (mb_detect_encoding($result, 'ASCII', true)) {
      echo $result . "\n";
      echo 'Key: ' . bin2hex($key) . "\n";
      break;
    }
  }
}

?>
