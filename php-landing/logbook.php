<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'logbook';


    $connLog = mysqli_connect($host, $user, $password, $database);

    if(mysqli_connect_error()){
        echo "error found!";
    }

    // else{
    //     echo "connected";
    // }

?>