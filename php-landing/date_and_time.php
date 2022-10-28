<?php

date_default_timezone_set('Asia/Manila');  
$current_timezone = date_default_timezone_get();
//    echo $current_timezone . "<br>";

$hours = date("h");
$minutes = date("i");
$seconds = date("s");
$setHour =  date("A");

$_SESSION['date'] = date("M-d-Y");
$_SESSION['time'] = $hours . ":". $minutes . ":" .$seconds .$setHour;
 

$date_logout = $_SESSION['date'];
$logout_time = $_SESSION['time']; 

// echo $date_logout ;
// echo $logout_time ;

// echo $date;


// var_dump($date);
// var_dump($time);


?>