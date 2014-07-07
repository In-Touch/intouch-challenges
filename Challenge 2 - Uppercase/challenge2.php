<!DOCTYPE html>
<html>
  <head>
    <link type='text/css' rel='stylesheet' href='style.css'/>
    <title>In-Touch Programming Challenge #2 - Uppercase</title>
  </head>
  <body>

      <div class="header"><h1>
      <?php
      $welcome = "In-Touch Programming Challenge #2 - Uppercase";
      echo $welcome;
      ?>
    </h1></div>
	
<div class="body">
      <?php

	  $challenge = "Given the following string:<br><br>
in-touch insight systems inc. programming challenge number 2<br><br>
Transform the sentence so that the first character on each word is in upper case. However, you cannot use any of these functions:<br><br>
ucfirst, ucwords, mb_convert_cas";
	  echo "<h1>Challenge</h1>";
	  echo $challenge;
	  echo "<br />";
	  echo "<br />";
      ?>
    </div>
<?php	

$sentence = "in-touch insight systems inc. programming challenge number 2";
$altsentence = str_replace("-", "  ", $sentence);

echo "<h1>Response</h1>";
echo "Original sentence: ";
echo "<br />";
echo $sentence;

echo "<br />";
echo "<br />";
echo "Converted sentence: ";
echo "<br />";
echo preg_replace_callback('/(?<=\s|^)[a-z]/', function($match) {
    return strtoupper($match[0]);
}, $sentence);
echo "<br />";
echo "<i>*Note: In-touch is considered one word, and therefore the 't' was not transformed.</i>";

echo "<br />";
echo "<br />";
echo "Desired converted sentence: ";
echo "<br />";
$altsentcnv = preg_replace_callback('/(?<=\s|^)[a-z]/', function($match) {
    return strtoupper($match[0]);
}, $altsentence);
$altcnvsent = str_replace("  ", "-", $altsentcnv);
echo $altcnvsent;
echo "<br />";
echo "<i>*Note: Modified sentence structure to enable correct conversion of hyphenated words.</i>";

?>
    </p>
  </body>
</html>
