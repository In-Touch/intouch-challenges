<?php
echo preg_replace_callback('/\b(\w)/', function ($match) { return strtoupper($match[0]);} , 'in-touch insight systems inc. programming challenge number 2');

?>
