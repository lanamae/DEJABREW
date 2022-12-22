<?php
    require "../php-landing/database.php";
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING); 

    $queryAccounts = "SELECT * FROM useraccounts";
    $sqlAccounts = mysqli_query($connection, $queryAccounts);
    $fetchData = mysqli_fetch_array($sqlAccounts);


    // $_SESSION['id'] = $userDetails['id'];
    // $_SESSION['position'] = $userDetails['position'];
    // $_SESSION['username'] = $userDetails['username'];
    // $_SESSION['password'] = $userDetails['password'];


    // while($fetchData){
    //     echo $fetchData['id'];
    // }
    



?>