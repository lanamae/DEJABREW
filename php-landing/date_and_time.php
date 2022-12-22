<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING); 
date_default_timezone_set('Asia/Manila');  
$current_timezone = date_default_timezone_get();
//    echo $current_timezone . "<br>";

$hours = date("h");
$minutes = date("i");
$seconds = date("s");
$setHour =  date("A");

$_SESSION['date'] = date("M-d-Y");
$_SESSION['time'] = $hours . ":". $minutes . ":" .$seconds .$setHour;
 
$date_login = $_SESSION['date'];
$login_time = $_SESSION['time']; 


// $date_logout = $_SESSION['date'];
// $logout_time = $_SESSION['time']; 

$date_logout = 0;
$logout_time = 0; 


// echo $date_logout ;
// echo $logout_time ;

// echo $date;


// var_dump($date);
// var_dump($time);


?>