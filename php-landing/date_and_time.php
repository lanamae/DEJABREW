<?php

date_default_timezone_set('Asia/Manila');  
$current_timezone = date_default_timezone_get();
//    echo $current_timezone . "<br>";

$hours = date("h");
$minutes = date("i");
$seconds = date("s");
$setHour =  date("A");

$date = date("M-d-Y");
$time = $hours . ":". $minutes . ":" .$seconds .$setHour;
 
// echo $date;


// var_dump($date);
// var_dump($time);


?>