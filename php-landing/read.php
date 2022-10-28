<?php
    require "../php-landing/database.php";

    $queryAccounts = "SELECT * FROM useraccounts";
    $sqlAccounts = mysqli_query($connection, $queryAccounts);
    $fetchData = mysqli_fetch_array($sqlAccounts);


    // echo $fetchData['position'];
    // echo $fetchData['email'];
    // echo $fetchData['username'];
    // echo $fetchData['password'];

  
    



?>