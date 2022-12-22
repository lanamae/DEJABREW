<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING); 
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'accounts';


    $connLog = mysqli_connect($host, $user, $password, $database);

    if(mysqli_connect_error()){
        echo "error found!";
    }

    // else{
    //     echo "connected";
    // }

?>