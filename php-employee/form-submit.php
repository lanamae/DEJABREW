<?php
 error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING); 
    // get in server side
    $my_form = $_COOKIE["my_form"];
 
    // decode from JSON
    $my_form = json_decode($my_form);
 
    // get single value
    $name = $my_form->name;
 
    print_r($name);
?>