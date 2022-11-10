<?php
    
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "products";
    
    $connProducts  = mysqli_connect($host, $user, $password, $database);

    if(mysqli_connect_error()){
        echo "ERROR";
    }

    // else{
    //     echo "Successfully Connected!";
    // }



?>