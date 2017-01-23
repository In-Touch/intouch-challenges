<?php

Class GetThatUpper{
    public static function getUpper(string $string){
        $vars = explode(' ',$string);
        $final = array();
        foreach($vars as $var){
            $var[0] = strtoupper($var[0]);
            $final[] = $var;
        }
        return implode(' ',$final);
    }
}

print_r(GetThatUpper::getUpper('in-touch insight systems inc. programming challenge number 2'));

?>