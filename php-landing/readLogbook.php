<?php
    require "../php-landing/logbook.php";

    $queryLog = "SELECT * FROM log_details";
    $sqlLog = mysqli_query($connLog, $queryLog);
    $logData = mysqli_fetch_array($sqlLog);

    echo $logData['id'];
    echo $logData['position'];
    echo $logData['username'];
  
    echo $logData['date_login'];
    echo $logData['login_time'];
    echo $logData['date_logout'];
    echo $logData['logout_time'];


  
    



?>