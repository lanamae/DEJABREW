<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING); 
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "order";
    
    
    $connOrder = mysqli_connect($host, $user, $password, $database);
    

    if(mysqli_connect_error()){
        echo "Error Found";
    }

    // else{
    //     echo "Connected to order database";
    // }

  

?>