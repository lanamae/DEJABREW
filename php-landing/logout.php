<?php
    require '../php-landing/logbook.php';
    require '../php-landing/date_and_time.php';

    session_start();
    
    // GETTING UPDATED TIME FOR LOGOUT
    // $_SESSION['date_logout'] = $date;
    // $_SESSION['logout_time'] = $time;


    echo $_SESSION['date'];
    echo $_SESSION['time']; 

    $date_logout = $_SESSION['date'];
    $logout_time = $_SESSION['time']; 

    // $date_logout = $_POST['date'];
    // $logout_time = $_POST['time']; 
    
    $queryLogout = "UPDATE log_details SET date_logout = '$date_logout' AND logout_time = '$logout_time' WHERE username = 'username'";
    $sqlLogout = mysqli_query($connLog, $queryLogout);


    // DESTROYING SESSION
    $_SESSION['status'] = 'invalid';
    unset($_SESSION['position']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['password']);

    echo "<script>window.location.href='../php-landing/landing.php'</script>";
    

   

    // require '../php-landing/logbook.php';

    // if(isset($_POST['logout_time'])){
    //     $getLogoutTime = trim($_POST['logout_time']);

    //     $queryLogout = "SELECT * FROM log_detailS";
    //     $sqlLogout = mysqli_query($connLog, $queryLogout);
    //     $logDetails = mysqli_fetch_array($sqlLogout);


             
    //     $queryLogbook = "UPDATE log_details SET position = '$position', username='$username', date_log='$getDate', logout_time='$getLogoutTime',)";
    //     $sqlLog = mysqli_query($connLog, $queryLogbook);

    //     echo "<script>alert('SUCCESSFULLY LOGOUT ACCOUNT')</script>";
    // }





   
?>