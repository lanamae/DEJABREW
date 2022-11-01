<?php
    require "../php-landing/database.php";
    

    $queryAccounts = "SELECT * FROM useraccounts";
    $sqlAccounts = mysqli_query($connection, $queryAccounts);
    $fetchData = mysqli_fetch_array($sqlAccounts);


    // $_SESSION['id'] = $userDetails['id'];
    // $_SESSION['position'] = $userDetails['position'];
    // $_SESSION['username'] = $userDetails['username'];
    // $_SESSION['password'] = $userDetails['password'];


  
    



?>